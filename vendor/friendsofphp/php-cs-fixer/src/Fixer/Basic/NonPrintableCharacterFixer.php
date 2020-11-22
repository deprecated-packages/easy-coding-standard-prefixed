<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace PhpCsFixer\Fixer\Basic;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\Fixer\ConfigurationDefinitionFixerInterface;
use PhpCsFixer\FixerConfiguration\FixerConfigurationResolver;
use PhpCsFixer\FixerConfiguration\FixerOptionBuilder;
use PhpCsFixer\FixerConfiguration\InvalidOptionsForEnvException;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\VersionSpecification;
use PhpCsFixer\FixerDefinition\VersionSpecificCodeSample;
use PhpCsFixer\Preg;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use _PhpScoper66292c14b658\Symfony\Component\OptionsResolver\Options;
/**
 * Removes Zero-width space (ZWSP), Non-breaking space (NBSP) and other invisible unicode symbols.
 *
 * @author Ivan Boprzenkov <ivan.borzenkov@gmail.com>
 */
final class NonPrintableCharacterFixer extends \PhpCsFixer\AbstractFixer implements \PhpCsFixer\Fixer\ConfigurationDefinitionFixerInterface
{
    private $symbolsReplace;
    private static $tokens = [\T_STRING_VARNAME, \T_INLINE_HTML, \T_VARIABLE, \T_COMMENT, \T_ENCAPSED_AND_WHITESPACE, \T_CONSTANT_ENCAPSED_STRING, \T_DOC_COMMENT];
    public function __construct()
    {
        parent::__construct();
        $this->symbolsReplace = [
            \pack('H*', 'e2808b') => ['', '200b'],
            // ZWSP U+200B
            \pack('H*', 'e28087') => [' ', '2007'],
            // FIGURE SPACE U+2007
            \pack('H*', 'e280af') => [' ', '202f'],
            // NBSP U+202F
            \pack('H*', 'e281a0') => ['', '2060'],
            // WORD JOINER U+2060
            \pack('H*', 'c2a0') => [' ', 'a0'],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function getDefinition()
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition('Remove Zero-width space (ZWSP), Non-breaking space (NBSP) and other invisible unicode symbols.', [new \PhpCsFixer\FixerDefinition\CodeSample('<?php echo "' . \pack('H*', 'e2808b') . 'Hello' . \pack('H*', 'e28087') . 'World' . \pack('H*', 'c2a0') . "!\";\n"), new \PhpCsFixer\FixerDefinition\VersionSpecificCodeSample('<?php echo "' . \pack('H*', 'e2808b') . 'Hello' . \pack('H*', 'e28087') . 'World' . \pack('H*', 'c2a0') . "!\";\n", new \PhpCsFixer\FixerDefinition\VersionSpecification(70000), ['use_escape_sequences_in_strings' => \true])], null, 'Risky when strings contain intended invisible characters.');
    }
    /**
     * {@inheritdoc}
     */
    public function isRisky()
    {
        return \true;
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(\PhpCsFixer\Tokenizer\Tokens $tokens)
    {
        return $tokens->isAnyTokenKindsFound(self::$tokens);
    }
    /**
     * {@inheritdoc}
     */
    protected function createConfigurationDefinition()
    {
        return new \PhpCsFixer\FixerConfiguration\FixerConfigurationResolver([(new \PhpCsFixer\FixerConfiguration\FixerOptionBuilder('use_escape_sequences_in_strings', 'Whether characters should be replaced with escape sequences in strings.'))->setAllowedTypes(['bool'])->setDefault(\false)->setNormalizer(static function (\_PhpScoper66292c14b658\Symfony\Component\OptionsResolver\Options $options, $value) {
            if (\PHP_VERSION_ID < 70000 && $value) {
                throw new \PhpCsFixer\FixerConfiguration\InvalidOptionsForEnvException('Escape sequences require PHP 7.0+.');
            }
            return $value;
        })->getOption()]);
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, \PhpCsFixer\Tokenizer\Tokens $tokens)
    {
        $replacements = [];
        $escapeSequences = [];
        foreach ($this->symbolsReplace as $character => list($replacement, $codepoint)) {
            $replacements[$character] = $replacement;
            $escapeSequences[$character] = '\\u{' . $codepoint . '}';
        }
        foreach ($tokens as $index => $token) {
            $content = $token->getContent();
            if ($this->configuration['use_escape_sequences_in_strings'] && $token->isGivenKind([\T_CONSTANT_ENCAPSED_STRING, \T_ENCAPSED_AND_WHITESPACE])) {
                if (!\PhpCsFixer\Preg::match('/' . \implode('|', \array_keys($escapeSequences)) . '/', $content)) {
                    continue;
                }
                $previousToken = $tokens[$index - 1];
                $stringTypeChanged = \false;
                if ($previousToken->isGivenKind(\T_START_HEREDOC)) {
                    $previousTokenContent = $previousToken->getContent();
                    if (\false !== \strpos($previousTokenContent, '\'')) {
                        $tokens[$index - 1] = new \PhpCsFixer\Tokenizer\Token([\T_START_HEREDOC, \str_replace('\'', '', $previousTokenContent)]);
                        $stringTypeChanged = \true;
                    }
                } elseif ("'" === $content[0]) {
                    $content = \PhpCsFixer\Preg::replace('/^\'(.*)\'$/', '"$1"', $content);
                    $stringTypeChanged = \true;
                }
                if ($stringTypeChanged) {
                    $content = \PhpCsFixer\Preg::replace('/([\\\\$])/', '\\\\$1', $content);
                }
                $tokens[$index] = new \PhpCsFixer\Tokenizer\Token([$token->getId(), \strtr($content, $escapeSequences)]);
                continue;
            }
            if ($token->isGivenKind(self::$tokens)) {
                $tokens[$index] = new \PhpCsFixer\Tokenizer\Token([$token->getId(), \strtr($content, $replacements)]);
            }
        }
    }
}
