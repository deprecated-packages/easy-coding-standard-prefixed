<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Scalar\String_;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassConst;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\AnnotateRegexClassConstWithRegexLinkRule\AnnotateRegexClassConstWithRegexLinkRuleTest
 */
final class AnnotateRegexClassConstWithRegexLinkRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Add regex101.com link to that shows the regex in practise, so it will be easier to maintain in case of bug/extension in the future';
    /**
     * @var string
     * @see https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php
     */
    private const ALL_MODIFIERS = 'imsxeADSUXJu';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassConst::class];
    }
    /**
     * @param ClassConst $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if (\count((array) $node->consts) !== 1) {
            return [];
        }
        $onlyConst = $node->consts[0];
        if (!$onlyConst->value instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Scalar\String_) {
            return [];
        }
        $constantName = (string) $onlyConst->name;
        if (!$this->isRegexPatternConstantName($constantName)) {
            return [];
        }
        $stringValue = $onlyConst->value->value;
        if (!$this->isNonSingleCharRegexPattern($stringValue)) {
            return [];
        }
        // is regex patern
        if ($this->hasDocBlockWithRegexLink($node)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    private function isNonSingleCharRegexPattern(string $value) : bool
    {
        // skip 1-char regexs
        if (\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::length($value) < 4) {
            return \false;
        }
        $firstChar = $value[0];
        if (\ctype_alpha($firstChar)) {
            return \false;
        }
        $patternWithoutModifiers = \rtrim($value, self::ALL_MODIFIERS);
        if (\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::length($patternWithoutModifiers) < 1) {
            return \false;
        }
        $lastChar = \_PhpScoper2b44cb0c30af\Nette\Utils\Strings::substring($patternWithoutModifiers, -1, 1);
        if ($firstChar !== $lastChar) {
            return \false;
        }
        // this is probably a regex
        return \true;
    }
    private function hasDocBlockWithRegexLink(\_PhpScoper2b44cb0c30af\PhpParser\Node $node) : bool
    {
        if ($node->getDocComment() === null) {
            return \false;
        }
        $docCommentText = $node->getDocComment()->getText();
        return \_PhpScoper2b44cb0c30af\Nette\Utils\Strings::contains($docCommentText, '@see https://regex101.com/r');
    }
    private function isRegexPatternConstantName(string $constantName) : bool
    {
        return (bool) \_PhpScoper2b44cb0c30af\Nette\Utils\Strings::endsWith($constantName, '_REGEX');
    }
}
