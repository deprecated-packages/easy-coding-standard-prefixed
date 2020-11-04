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
namespace PhpCsFixer\Fixer\Phpdoc;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\DocBlock\DocBlock;
use PhpCsFixer\Fixer\ConfigurationDefinitionFixerInterface;
use PhpCsFixer\FixerConfiguration\FixerConfigurationResolverRootless;
use PhpCsFixer\FixerConfiguration\FixerOptionBuilder;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\Preg;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use _PhpScoperb383f16e851e\Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use _PhpScoperb383f16e851e\Symfony\Component\OptionsResolver\Options;
/**
 * Case sensitive tag replace fixer (does not process inline tags like {@inheritdoc}).
 *
 * @author Graham Campbell <graham@alt-three.com>
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 * @author SpacePossum
 */
final class PhpdocNoAliasTagFixer extends \PhpCsFixer\AbstractFixer implements \PhpCsFixer\Fixer\ConfigurationDefinitionFixerInterface
{
    /**
     * {@inheritdoc}
     */
    public function isCandidate(\PhpCsFixer\Tokenizer\Tokens $tokens)
    {
        return $tokens->isTokenKindFound(\T_DOC_COMMENT);
    }
    /**
     * {@inheritdoc}
     */
    public function getDefinition()
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition('No alias PHPDoc tags should be used.', [new \PhpCsFixer\FixerDefinition\CodeSample('<?php
/**
 * @property string $foo
 * @property-read string $bar
 *
 * @link baz
 */
final class Example
{
}
'), new \PhpCsFixer\FixerDefinition\CodeSample('<?php
/**
 * @property string $foo
 * @property-read string $bar
 *
 * @link baz
 */
final class Example
{
}
', ['replacements' => ['link' => 'website']])]);
    }
    /**
     * {@inheritdoc}
     */
    public function getPriority()
    {
        // must be run before PhpdocAddMissingParamAnnotationFixer
        return 11;
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, \PhpCsFixer\Tokenizer\Tokens $tokens)
    {
        $searchFor = \array_keys($this->configuration['replacements']);
        foreach ($tokens as $index => $token) {
            if (!$token->isGivenKind(\T_DOC_COMMENT)) {
                continue;
            }
            $doc = new \PhpCsFixer\DocBlock\DocBlock($token->getContent());
            $annotations = $doc->getAnnotationsOfType($searchFor);
            if (empty($annotations)) {
                continue;
            }
            foreach ($annotations as $annotation) {
                $annotation->getTag()->setName($this->configuration['replacements'][$annotation->getTag()->getName()]);
            }
            $tokens[$index] = new \PhpCsFixer\Tokenizer\Token([\T_DOC_COMMENT, $doc->getContent()]);
        }
    }
    /**
     * {@inheritdoc}
     */
    protected function createConfigurationDefinition()
    {
        return new \PhpCsFixer\FixerConfiguration\FixerConfigurationResolverRootless('replacements', [(new \PhpCsFixer\FixerConfiguration\FixerOptionBuilder('replacements', 'Mapping between replaced annotations with new ones.'))->setAllowedTypes(['array'])->setNormalizer(static function (\_PhpScoperb383f16e851e\Symfony\Component\OptionsResolver\Options $options, $value) {
            $normalizedValue = [];
            foreach ($value as $from => $to) {
                if (!\is_string($from)) {
                    throw new \_PhpScoperb383f16e851e\Symfony\Component\OptionsResolver\Exception\InvalidOptionsException('Tag to replace must be a string.');
                }
                if (!\is_string($to)) {
                    throw new \_PhpScoperb383f16e851e\Symfony\Component\OptionsResolver\Exception\InvalidOptionsException(\sprintf('Tag to replace to from "%s" must be a string.', $from));
                }
                if (1 !== \PhpCsFixer\Preg::match('#^\\S+$#', $to) || \false !== \strpos($to, '*/')) {
                    throw new \_PhpScoperb383f16e851e\Symfony\Component\OptionsResolver\Exception\InvalidOptionsException(\sprintf('Tag "%s" cannot be replaced by invalid tag "%s".', $from, $to));
                }
                $normalizedValue[\trim($from)] = \trim($to);
            }
            foreach ($normalizedValue as $from => $to) {
                if (isset($normalizedValue[$to])) {
                    throw new \_PhpScoperb383f16e851e\Symfony\Component\OptionsResolver\Exception\InvalidOptionsException(\sprintf('Cannot change tag "%1$s" to tag "%2$s", as the tag "%2$s" is configured to be replaced to "%3$s".', $from, $to, $normalizedValue[$to]));
                }
            }
            return $normalizedValue;
        })->setDefault(['property-read' => 'property', 'property-write' => 'property', 'type' => 'var', 'link' => 'see'])->getOption()], $this->getName());
    }
}