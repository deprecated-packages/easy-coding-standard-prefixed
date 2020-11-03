<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\Nette\Utils\Strings;
use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\Assign;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\PropertyFetch;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\StaticPropertyFetch;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper3d04c8135695\PhpParser\NodeFinder;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoSetterOnServiceRule\NoSetterOnServiceRuleTest
 */
final class NoSetterOnServiceRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Do not use setter on a service';
    /**
     * @var string
     * @see https://regex101.com/r/yI3qGS/2
     */
    private const NOT_A_SERVICE_NAMESPACE_REGEX = '#\\bEntity|Event|ValueObject\\b#';
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoper3d04c8135695\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod::class];
    }
    /**
     * @param ClassMethod $node
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        $fullyQualifiedClassName = $this->getClassName($scope);
        if ($fullyQualifiedClassName === null) {
            return [];
        }
        if (\_PhpScoper3d04c8135695\Nette\Utils\Strings::match($fullyQualifiedClassName, self::NOT_A_SERVICE_NAMESPACE_REGEX)) {
            return [];
        }
        if (!$node->isPublic()) {
            return [];
        }
        $classMethodName = $node->name->toString();
        if (!\_PhpScoper3d04c8135695\Nette\Utils\Strings::startsWith($classMethodName, 'set')) {
            return [];
        }
        /** @var Assign[] $assigns */
        $assigns = $this->nodeFinder->findInstanceOf((array) $node->getStmts(), \_PhpScoper3d04c8135695\PhpParser\Node\Expr\Assign::class);
        foreach ($assigns as $assign) {
            $assignVariable = $assign->var;
            if ($assignVariable instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Expr\PropertyFetch || $assignVariable instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Expr\StaticPropertyFetch) {
                return [self::ERROR_MESSAGE];
            }
        }
        return [];
    }
}
