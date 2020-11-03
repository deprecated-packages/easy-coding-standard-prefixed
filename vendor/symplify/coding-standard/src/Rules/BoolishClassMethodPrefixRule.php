<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Return_;
use _PhpScoper2b44cb0c30af\PhpParser\NodeFinder;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Reflection\ClassReflection;
use _PhpScoper2b44cb0c30af\PHPStan\Reflection\ParametersAcceptorSelector;
use _PhpScoper2b44cb0c30af\PHPStan\ShouldNotHappenException;
use _PhpScoper2b44cb0c30af\PHPStan\Type\BooleanType;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\BoolishClassMethodPrefixRule\BoolishClassMethodPrefixRuleTest
 */
final class BoolishClassMethodPrefixRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Method "%s()" returns bool type, so the name should start with is/has/was...';
    /**
     * @var string[]
     */
    private const BOOL_PREFIXES = [
        'is',
        'are',
        'was',
        'will',
        'has',
        'have',
        'had',
        'do',
        'does',
        'di',
        'can',
        'could',
        'should',
        'starts',
        'contains',
        'ends',
        'exists',
        'supports',
        'provide',
        # array access
        'offsetExists',
    ];
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoper2b44cb0c30af\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
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
        $classReflection = $scope->getClassReflection();
        if ($classReflection === null) {
            throw new \_PhpScoper2b44cb0c30af\PHPStan\ShouldNotHappenException();
        }
        if ($this->shouldSkip($node, $scope, $classReflection)) {
            return [];
        }
        return [\sprintf(self::ERROR_MESSAGE, (string) $node->name)];
    }
    private function shouldSkip(\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod $classMethod, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope, \_PhpScoper2b44cb0c30af\PHPStan\Reflection\ClassReflection $classReflection) : bool
    {
        $methodName = $classMethod->name->toString();
        $returns = $this->findReturnsWithValues($classMethod);
        // nothing was returned
        if ($returns === []) {
            return \true;
        }
        $methodReflection = $classReflection->getNativeMethod($methodName);
        $returnType = \_PhpScoper2b44cb0c30af\PHPStan\Reflection\ParametersAcceptorSelector::selectSingle($methodReflection->getVariants())->getReturnType();
        if (!$returnType instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\BooleanType && !$this->areOnlyBoolReturnNodes($returns, $scope)) {
            return \true;
        }
        if ($this->isMethodNameMatchingBoolPrefixes($methodName)) {
            return \true;
        }
        // is required by an interface
        return $this->isMethodRequiredByParentInterface($classReflection, $methodName);
    }
    /**
     * @return Return_[]
     */
    private function findReturnsWithValues(\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod $classMethod) : array
    {
        /** @var Return_[] $returns */
        $returns = $this->nodeFinder->findInstanceOf((array) $classMethod->getStmts(), \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Return_::class);
        $returnsWithValues = [];
        foreach ($returns as $return) {
            if ($return->expr === null) {
                continue;
            }
            $returnsWithValues[] = $return;
        }
        return $returnsWithValues;
    }
    /**
     * @param Return_[] $returns
     */
    private function areOnlyBoolReturnNodes(array $returns, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : bool
    {
        foreach ($returns as $return) {
            if ($return->expr === null) {
                continue;
            }
            $returnedNodeType = $scope->getType($return->expr);
            if (!$returnedNodeType instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\BooleanType) {
                return \false;
            }
        }
        return \true;
    }
    private function isMethodNameMatchingBoolPrefixes(string $methodName) : bool
    {
        $prefixesPattern = '#^(' . \implode('|', self::BOOL_PREFIXES) . ')#';
        return (bool) \_PhpScoper2b44cb0c30af\Nette\Utils\Strings::match($methodName, $prefixesPattern);
    }
    private function isMethodRequiredByParentInterface(\_PhpScoper2b44cb0c30af\PHPStan\Reflection\ClassReflection $classReflection, string $methodName) : bool
    {
        $interfaces = $classReflection->getInterfaces();
        foreach ($interfaces as $interface) {
            if ($interface->hasMethod($methodName)) {
                return \true;
            }
        }
        return \false;
    }
}
