<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\New_;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper2b44cb0c30af\PhpParser\NodeFinder;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\ForbiddenNewInMethodRule\ForbiddenNewInMethodRuleTest
 */
final class ForbiddenNewInMethodRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = '"new" in method "%s->%s()" is not allowed.';
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    /**
     * @var array<string, string[]>
     */
    private $forbiddenClassMethods = [];
    /**
     * @param array<string, string[]> $forbiddenClassMethods
     */
    public function __construct(\_PhpScoper2b44cb0c30af\PhpParser\NodeFinder $nodeFinder, array $forbiddenClassMethods = [])
    {
        $this->nodeFinder = $nodeFinder;
        $this->forbiddenClassMethods = $forbiddenClassMethods;
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
        $currentFullyQualifiedClassName = $this->resolveCurrentClassName($node);
        if ($currentFullyQualifiedClassName === null) {
            return [];
        }
        $methodName = (string) $node->name;
        foreach ($this->forbiddenClassMethods as $class => $methods) {
            if (!\is_a($currentFullyQualifiedClassName, $class, \true)) {
                continue;
            }
            if (\in_array($methodName, $methods, \true) && $this->hasNewInside($node)) {
                $errorMessage = \sprintf(self::ERROR_MESSAGE, $currentFullyQualifiedClassName, $methodName);
                return [$errorMessage];
            }
        }
        return [];
    }
    private function hasNewInside(\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod $classMethod) : bool
    {
        return (bool) $this->nodeFinder->findFirstInstanceOf($classMethod, \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\New_::class);
    }
}
