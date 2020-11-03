<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\Nette\Utils\Strings;
use PhpCsFixer\DocBlock\Annotation;
use PhpCsFixer\DocBlock\DocBlock;
use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\ConstFetch;
use _PhpScoper3d04c8135695\PhpParser\Node\Scalar\DNumber;
use _PhpScoper3d04c8135695\PhpParser\Node\Scalar\LNumber;
use _PhpScoper3d04c8135695\PhpParser\Node\Scalar\String_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassConst;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\MatchingTypeConstantRule\MatchingTypeConstantRuleTest
 */
final class MatchingTypeConstantRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Constant type should be "%s", but is "%s"';
    /**
     * @var array<string, array<string>>
     */
    private const TYPE_NODES_TO_ACCEPTED_TYPES = [\_PhpScoper3d04c8135695\PhpParser\Node\Scalar\LNumber::class => ['int'], \_PhpScoper3d04c8135695\PhpParser\Node\Scalar\DNumber::class => ['float', 'double'], \_PhpScoper3d04c8135695\PhpParser\Node\Scalar\String_::class => ['string'], \_PhpScoper3d04c8135695\PhpParser\Node\Expr\ConstFetch::class => ['bool']];
    /**
     * @var array<string, string>
     */
    private const TYPE_CLASS_TO_STRING_TYPE = [\_PhpScoper3d04c8135695\PhpParser\Node\Scalar\String_::class => 'string', \_PhpScoper3d04c8135695\PhpParser\Node\Scalar\LNumber::class => 'int', \_PhpScoper3d04c8135695\PhpParser\Node\Scalar\DNumber::class => 'float', \_PhpScoper3d04c8135695\PhpParser\Node\Expr\ConstFetch::class => 'bool'];
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassConst::class];
    }
    /**
     * @param ClassConst $node
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        if ($this->shouldSkip($node)) {
            return [];
        }
        $type = $this->resolveOnlyVarAnnotationType($node);
        if ($type === null) {
            return [];
        }
        // array, unable to resolve?
        if (\_PhpScoper3d04c8135695\Nette\Utils\Strings::endsWith($type, '[]')) {
            return [];
        }
        $constantValue = $node->consts[0]->value;
        return $this->processConstantValue($constantValue, $type);
    }
    private function shouldSkip(\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassConst $classConst) : bool
    {
        if ($classConst->getDocComment() === null) {
            return \true;
        }
        return \count((array) $classConst->consts) !== 1;
    }
    private function resolveOnlyVarAnnotationType(\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassConst $classConst) : ?string
    {
        $varAnnotations = $this->getVarAnnotationsForNode($classConst);
        if (\count($varAnnotations) === 0) {
            return null;
        }
        $types = $varAnnotations[0]->getNormalizedTypes();
        if (\count($types) !== 1) {
            return null;
        }
        return $types[0];
    }
    /**
     * @return string[]
     */
    private function processConstantValue(\_PhpScoper3d04c8135695\PhpParser\Node\Expr $expr, string $type) : array
    {
        foreach (self::TYPE_NODES_TO_ACCEPTED_TYPES as $typeNode => $acceptedTypes) {
            /** @var string $typeNode */
            if (!\is_a($expr, $typeNode, \true)) {
                continue;
            }
            if ($this->isValidConstantValue($expr, $type, $acceptedTypes)) {
                return [];
            }
            return $this->reportMissmatch($type, $typeNode);
        }
        return [];
    }
    /**
     * @return Annotation[]
     */
    private function getVarAnnotationsForNode(\_PhpScoper3d04c8135695\PhpParser\Node $node) : array
    {
        if ($node->getDocComment() === null) {
            return [];
        }
        $docBlock = new \PhpCsFixer\DocBlock\DocBlock($node->getDocComment()->getText());
        return $docBlock->getAnnotationsOfType('var');
    }
    /**
     * @param string[] $acceptedTypes
     */
    private function isValidConstantValue(\_PhpScoper3d04c8135695\PhpParser\Node\Expr $expr, string $type, array $acceptedTypes) : bool
    {
        if (\in_array($type, $acceptedTypes, \true)) {
            return \true;
        }
        // special bool case
        if (!$expr instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Expr\ConstFetch) {
            return \false;
        }
        if ($type !== 'bool') {
            return \false;
        }
        return \in_array($expr->name->toLowerString(), ['false', 'true'], \true);
    }
    /**
     * @return string[]
     */
    private function reportMissmatch(string $expectedType, string $typeNodeClass) : array
    {
        $message = \sprintf(self::ERROR_MESSAGE, $expectedType, $this->getStringFromNodeClass($typeNodeClass));
        return [$message];
    }
    private function getStringFromNodeClass(string $nodeClass) : string
    {
        foreach (self::TYPE_CLASS_TO_STRING_TYPE as $typeClass => $stringType) {
            /** @var string $typeClass */
            if (!\is_a($nodeClass, $typeClass, \true)) {
                continue;
            }
            return $stringType;
        }
        return $nodeClass;
    }
}
