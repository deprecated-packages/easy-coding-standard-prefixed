<?php

declare (strict_types=1);
/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace PhpCsFixer\Fixer\ArrayNotation;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\Fixer\ConfigurableFixerInterface;
use PhpCsFixer\FixerConfiguration\FixerConfigurationResolver;
use PhpCsFixer\FixerConfiguration\FixerConfigurationResolverInterface;
use PhpCsFixer\FixerConfiguration\FixerOptionBuilder;
use PhpCsFixer\FixerConfiguration\InvalidOptionsForEnvException;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\FixerDefinition\VersionSpecification;
use PhpCsFixer\FixerDefinition\VersionSpecificCodeSample;
use PhpCsFixer\Tokenizer\CT;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use PhpCsFixer\Tokenizer\TokensAnalyzer;
use _PhpScoper8583deb8ab74\Symfony\Component\OptionsResolver\Options;
/**
 * @author Sebastiaan Stok <s.stok@rollerscapes.net>
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 */
final class TrailingCommaInMultilineArrayFixer extends \PhpCsFixer\AbstractFixer implements \PhpCsFixer\Fixer\ConfigurableFixerInterface
{
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : \PhpCsFixer\FixerDefinition\FixerDefinitionInterface
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition('PHP multi-line arrays should have a trailing comma.', [new \PhpCsFixer\FixerDefinition\CodeSample("<?php\narray(\n    1,\n    2\n);\n"), new \PhpCsFixer\FixerDefinition\VersionSpecificCodeSample(<<<'SAMPLE'
<?php

namespace _PhpScoper8583deb8ab74;

$x = ['foo', <<<EOD
bar
EOD
];

SAMPLE
, new \PhpCsFixer\FixerDefinition\VersionSpecification(70300), ['after_heredoc' => \true])]);
    }
    /**
     * {@inheritdoc}
     *
     * Must run after NoMultilineWhitespaceAroundDoubleArrowFixer.
     */
    public function getPriority() : int
    {
        return 0;
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(\PhpCsFixer\Tokenizer\Tokens $tokens) : bool
    {
        return $tokens->isAnyTokenKindsFound([\T_ARRAY, \PhpCsFixer\Tokenizer\CT::T_ARRAY_SQUARE_BRACE_OPEN]);
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, \PhpCsFixer\Tokenizer\Tokens $tokens) : void
    {
        $tokensAnalyzer = new \PhpCsFixer\Tokenizer\TokensAnalyzer($tokens);
        for ($index = $tokens->count() - 1; $index >= 0; --$index) {
            if ($tokensAnalyzer->isArray($index) && $tokensAnalyzer->isArrayMultiLine($index)) {
                $this->fixArray($tokens, $index);
            }
        }
    }
    /**
     * {@inheritdoc}
     */
    protected function createConfigurationDefinition() : \PhpCsFixer\FixerConfiguration\FixerConfigurationResolverInterface
    {
        return new \PhpCsFixer\FixerConfiguration\FixerConfigurationResolver([(new \PhpCsFixer\FixerConfiguration\FixerOptionBuilder('after_heredoc', 'Whether a trailing comma should also be placed after heredoc end.'))->setAllowedTypes(['bool'])->setDefault(\false)->setNormalizer(static function (\_PhpScoper8583deb8ab74\Symfony\Component\OptionsResolver\Options $options, $value) {
            if (\PHP_VERSION_ID < 70300 && $value) {
                throw new \PhpCsFixer\FixerConfiguration\InvalidOptionsForEnvException('"after_heredoc" option can only be enabled with PHP 7.3+.');
            }
            return $value;
        })->getOption()]);
    }
    private function fixArray(\PhpCsFixer\Tokenizer\Tokens $tokens, int $index) : void
    {
        $startIndex = $index;
        if ($tokens[$startIndex]->isGivenKind(\T_ARRAY)) {
            $startIndex = $tokens->getNextTokenOfKind($startIndex, ['(']);
            $endIndex = $tokens->findBlockEnd(\PhpCsFixer\Tokenizer\Tokens::BLOCK_TYPE_PARENTHESIS_BRACE, $startIndex);
        } else {
            $endIndex = $tokens->findBlockEnd(\PhpCsFixer\Tokenizer\Tokens::BLOCK_TYPE_ARRAY_SQUARE_BRACE, $startIndex);
        }
        $beforeEndIndex = $tokens->getPrevMeaningfulToken($endIndex);
        $beforeEndToken = $tokens[$beforeEndIndex];
        // if there is some item between braces then add `,` after it
        if ($startIndex !== $beforeEndIndex && !$beforeEndToken->equals(',') && ($this->configuration['after_heredoc'] || !$beforeEndToken->isGivenKind(\T_END_HEREDOC))) {
            $tokens->insertAt($beforeEndIndex + 1, new \PhpCsFixer\Tokenizer\Token(','));
            $endToken = $tokens[$endIndex];
            if (!$endToken->isComment() && !$endToken->isWhitespace()) {
                $tokens->ensureWhitespaceAtIndex($endIndex, 1, ' ');
            }
        }
    }
}
