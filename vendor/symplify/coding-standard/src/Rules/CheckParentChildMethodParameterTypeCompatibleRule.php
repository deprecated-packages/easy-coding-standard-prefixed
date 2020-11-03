<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Identifier;
use _PhpScoper2b44cb0c30af\PhpParser\Node\NullableType;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Class_;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\PHPStan\ParentClassMethodNodeResolver;
use Symplify\CodingStandard\PHPStan\ParentMethodAnalyser;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\CheckParentChildMethodParameterTypeCompatibleRule\CheckParentChildMethodParameterTypeCompatibleRuleTest
 */
final class CheckParentChildMethodParameterTypeCompatibleRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Parent and Child Method Parameter must be compatible';
    /**
     * @var ParentMethodAnalyser
     */
    private $parentMethodAnalyser;
    /**
     * @var ParentClassMethodNodeResolver
     */
    private $parentClassMethodNodeResolver;
    public function __construct(\Symplify\CodingStandard\PHPStan\ParentMethodAnalyser $parentMethodAnalyser, \Symplify\CodingStandard\PHPStan\ParentClassMethodNodeResolver $parentClassMethodNodeResolver)
    {
        $this->parentMethodAnalyser = $parentMethodAnalyser;
        $this->parentClassMethodNodeResolver = $parentClassMethodNodeResolver;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod::class];
    }
    /**
     * @param ClassMethod $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        /** @var Class_|null $class */
        $class = $this->resolveCurrentClass($node);
        // not inside class → skip
        if ($class === null) {
            return [];
        }
        // no extends and no implements → skip
        if ($class->extends === null && $class->implements === []) {
            return [];
        }
        // method name is __construct or not has parent method → skip
        $methodName = (string) $node->name;
        if ($methodName === '__construct' || !$this->parentMethodAnalyser->hasParentClassMethodWithSameName($scope, $methodName)) {
            return [];
        }
        $parentParameters = $this->parentClassMethodNodeResolver->resolveParentClassMethodParams($scope, $methodName);
        $parentParameterTypes = $this->getParameterTypes($parentParameters);
        $currentParameterTypes = $this->getParameterTypes($node->params);
        if ($parentParameterTypes === $currentParameterTypes) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    /**
     * @return string[]|null[]
     */
    private function getParameterTypes(array $params) : array
    {
        $parameterTypes = [];
        foreach ($params as $param) {
            $parameterTypes[] = $this->getParamType($param->type);
        }
        return $parameterTypes;
    }
    private function getParamType(?\_PhpScoper2b44cb0c30af\PhpParser\Node $node) : ?string
    {
        if ($node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Identifier) {
            return $node->name;
        }
        if ($node === null) {
            return null;
        }
        if ($node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\NullableType) {
            $node = $node->type;
            return $this->getParamType($node);
        }
        if (\method_exists($node, 'toString')) {
            return $node->toString();
        }
        return null;
    }
}
