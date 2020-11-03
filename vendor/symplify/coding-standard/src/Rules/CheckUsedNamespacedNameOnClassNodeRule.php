<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Assign;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Variable;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Identifier;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\ValueObject\PHPStanAttributeKey;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\CheckUsedNamespacedNameOnClassNodeRule\CheckUsedNamespacedNameOnClassNodeRuleTest
 */
final class CheckUsedNamespacedNameOnClassNodeRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use namespaceName on Class_ node';
    /**
     * @var string[]
     */
    private $excludedClasses = [];
    /**
     * @param string[] $excludedClasses
     */
    public function __construct(array $excludedClasses = [])
    {
        $this->excludedClasses = $excludedClasses;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Variable::class];
    }
    /**
     * @param Variable $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $type = $scope->getType($node);
        if (!\method_exists($type, 'getClassName')) {
            return [];
        }
        if ($type->getClassName() !== \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_::class) {
            return [];
        }
        $next = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::NEXT);
        if ($next === null) {
            return [];
        }
        if ($next->name !== 'name') {
            return [];
        }
        if ($this->isVariableNamedShortClassName($node)) {
            return [];
        }
        /** @var Class_|null $class */
        $class = $this->getFirstParentByType($node, \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_::class);
        if ($class === null) {
            return [];
        }
        if (\in_array($class->namespacedName->toString(), $this->excludedClasses, \true)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    private function isVariableNamedShortClassName(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Variable $variable) : bool
    {
        /** @var Assign|null $assign */
        $assign = $this->getFirstParentByType($variable, \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Assign::class);
        if (!$assign instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Assign) {
            return \false;
        }
        /** @var Variable $classNameVariable */
        $classNameVariable = $assign->var;
        /** @var Identifier $classNameIdentifier */
        $classNameIdentifier = $classNameVariable->name;
        $classNameVariableName = (string) $classNameIdentifier;
        if ($classNameVariableName !== 'shortClassName') {
            return \false;
        }
        return \true;
    }
}
