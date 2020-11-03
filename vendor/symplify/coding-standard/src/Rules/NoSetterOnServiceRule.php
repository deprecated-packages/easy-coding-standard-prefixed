<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Assign;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\PropertyFetch;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\StaticPropertyFetch;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper2b44cb0c30af\PhpParser\NodeFinder;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
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
        $fullyQualifiedClassName = $this->getClassName($scope);
        if ($fullyQualifiedClassName === null) {
            return [];
        }
        if (\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::match($fullyQualifiedClassName, self::NOT_A_SERVICE_NAMESPACE_REGEX)) {
            return [];
        }
        if (!$node->isPublic()) {
            return [];
        }
        $classMethodName = $node->name->toString();
        if (!\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::startsWith($classMethodName, 'set')) {
            return [];
        }
        /** @var Assign[] $assigns */
        $assigns = $this->nodeFinder->findInstanceOf((array) $node->getStmts(), \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Assign::class);
        foreach ($assigns as $assign) {
            $assignVariable = $assign->var;
            if ($assignVariable instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\PropertyFetch || $assignVariable instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\StaticPropertyFetch) {
                return [self::ERROR_MESSAGE];
            }
        }
        return [];
    }
}
