<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Comment\Doc;
use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use _PhpScoper8de082cbb8c7\PHPStan\Broker\Broker;
use _PhpScoper8de082cbb8c7\PHPStan\PhpDoc\ResolvedPhpDocBlock;
use _PhpScoper8de082cbb8c7\PHPStan\PhpDocParser\Ast\PhpDoc\GenericTagValueNode;
use _PhpScoper8de082cbb8c7\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocNode;
use _PhpScoper8de082cbb8c7\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagNode;
use _PhpScoper8de082cbb8c7\PHPStan\Reflection\ClassReflection;
use _PhpScoper8de082cbb8c7\PHPStan\Type\FileTypeMapper;
use _PhpScoper8de082cbb8c7\PHPUnit\Framework\TestCase;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\SeeAnnotationToTestRule\SeeAnnotationToTestRuleTest
 */
final class SeeAnnotationToTestRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Class "%s" is missing @see annotation with test case class reference';
    /**
     * @var FileTypeMapper
     */
    private $fileTypeMapper;
    /**
     * @var Broker
     */
    private $broker;
    /**
     * @var class-string[]
     */
    private $requiredSeeTypes = [];
    /**
     * @var PrivatesAccessor
     */
    private $privatesAccessor;
    public function __construct(\_PhpScoper8de082cbb8c7\PHPStan\Broker\Broker $broker, \_PhpScoper8de082cbb8c7\PHPStan\Type\FileTypeMapper $fileTypeMapper, array $requiredSeeTypes = [])
    {
        $this->fileTypeMapper = $fileTypeMapper;
        $this->broker = $broker;
        $this->requiredSeeTypes = $requiredSeeTypes;
        $this->privatesAccessor = new \Symplify\PackageBuilder\Reflection\PrivatesAccessor();
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_::class];
    }
    /**
     * @param Class_ $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $classReflection = $this->matchClassReflection($node);
        if ($classReflection === null) {
            return [];
        }
        if ($this->shouldSkipClassReflection($classReflection)) {
            return [];
        }
        $docComment = $node->getDocComment();
        if ($docComment === null) {
            return [\sprintf(self::ERROR_MESSAGE, $classReflection->getName())];
        }
        $resolvedPhpDocBlock = $this->resolvePhpDoc($scope, $classReflection, $docComment);
        // skip deprectaed
        $deprecatedTags = $resolvedPhpDocBlock->getDeprecatedTag();
        if ($deprecatedTags !== null) {
            return [];
        }
        $seeTags = $this->getSeeTagNodes($resolvedPhpDocBlock);
        if ($this->hasSeeTestCaseAnnotation($seeTags)) {
            return [];
        }
        return [\sprintf(self::ERROR_MESSAGE, $classReflection->getName())];
    }
    private function shouldSkipClassReflection(\_PhpScoper8de082cbb8c7\PHPStan\Reflection\ClassReflection $classReflection) : bool
    {
        if ($classReflection->isAbstract()) {
            return \true;
        }
        foreach ($this->requiredSeeTypes as $requiredSeeType) {
            if ($classReflection->isSubclassOf($requiredSeeType)) {
                return \false;
            }
        }
        return \true;
    }
    private function matchClassReflection(\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_ $class) : ?\_PhpScoper8de082cbb8c7\PHPStan\Reflection\ClassReflection
    {
        $shortClassName = $class->name;
        if ($shortClassName === null) {
            return null;
        }
        $className = (string) $class->namespacedName;
        if (!\class_exists($className)) {
            return null;
        }
        return $this->broker->getClass($className);
    }
    private function resolvePhpDoc(\_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope, \_PhpScoper8de082cbb8c7\PHPStan\Reflection\ClassReflection $classReflection, \_PhpScoper8de082cbb8c7\PhpParser\Comment\Doc $doc) : \_PhpScoper8de082cbb8c7\PHPStan\PhpDoc\ResolvedPhpDocBlock
    {
        return $this->fileTypeMapper->getResolvedPhpDoc($scope->getFile(), $classReflection->getName(), null, null, $doc->getText());
    }
    /**
     * @param PhpDocTagNode[] $seeTags
     */
    private function hasSeeTestCaseAnnotation(array $seeTags) : bool
    {
        foreach ($seeTags as $seeTag) {
            if (!$seeTag->value instanceof \_PhpScoper8de082cbb8c7\PHPStan\PhpDocParser\Ast\PhpDoc\GenericTagValueNode) {
                continue;
            }
            if (\is_a($seeTag->value->value, \_PhpScoper8de082cbb8c7\PHPUnit\Framework\TestCase::class, \true)) {
                return \true;
            }
        }
        return \false;
    }
    /**
     * @return PhpDocTagNode[]
     */
    private function getSeeTagNodes(\_PhpScoper8de082cbb8c7\PHPStan\PhpDoc\ResolvedPhpDocBlock $resolvedPhpDocBlock) : array
    {
        /** @var PhpDocNode $phpDocNode */
        $phpDocNode = $this->privatesAccessor->getPrivateProperty($resolvedPhpDocBlock, 'phpDocNode');
        return $phpDocNode->getTagsByName('@see');
    }
}
