<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ArrayDimFetch;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Assign;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Expression;
use _PhpScoper8de082cbb8c7\PhpParser\PrettyPrinter\Standard;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\ValueObject\PHPStanAttributeKey;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoMultiArrayAssignRule\NoMultiArrayAssignRuleTest
 */
final class NoMultiArrayAssignRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use value object over multi array assign';
    /**
     * @var Standard
     */
    private $printerStandard;
    public function __construct(\_PhpScoper8de082cbb8c7\PhpParser\PrettyPrinter\Standard $printerStandard)
    {
        $this->printerStandard = $printerStandard;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Assign::class];
    }
    /**
     * @param Assign $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$node->var instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ArrayDimFetch) {
            return [];
        }
        // is previous array dim assign too? - print the exprt conteont
        $previousArrayDimFetch = $this->matchParentArrayDimFetch($node);
        if ($previousArrayDimFetch === null) {
            return [];
        }
        if (!$this->haveSameArrayDimFetchNonEmptyRoot($node->var, $previousArrayDimFetch)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    private function haveSameArrayDimFetchNonEmptyRoot(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ArrayDimFetch $firstArrayDimFetch, \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ArrayDimFetch $secondArrayDimFetch) : bool
    {
        $singleNestedFirstArrayDimFetch = $this->resolveSingleNestedArrayDimFetch($firstArrayDimFetch);
        $singleNestedSecondArrayDimFetch = $this->resolveSingleNestedArrayDimFetch($secondArrayDimFetch);
        if ($singleNestedFirstArrayDimFetch->dim === null) {
            return \false;
        }
        return $this->areNodesEqual($singleNestedFirstArrayDimFetch, $singleNestedSecondArrayDimFetch);
    }
    private function resolveSingleNestedArrayDimFetch(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ArrayDimFetch $arrayDimFetch) : \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ArrayDimFetch
    {
        while ($arrayDimFetch->var instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ArrayDimFetch) {
            $arrayDimFetch = $arrayDimFetch->var;
        }
        return $arrayDimFetch;
    }
    private function areNodesEqual(\_PhpScoper8de082cbb8c7\PhpParser\Node $firstNode, \_PhpScoper8de082cbb8c7\PhpParser\Node $secondNode) : bool
    {
        return $this->printerStandard->prettyPrint([$firstNode]) === $this->printerStandard->prettyPrint([$secondNode]);
    }
    private function matchParentArrayDimFetch(\_PhpScoper8de082cbb8c7\PhpParser\Node $node) : ?\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ArrayDimFetch
    {
        $parent = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        if (!$parent instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Expression) {
            return null;
        }
        $previous = $parent->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PREVIOUS);
        if (!$previous instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Expression) {
            return null;
        }
        if (!$previous->expr instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Assign) {
            return null;
        }
        $assign = $previous->expr;
        if (!$assign->var instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ArrayDimFetch) {
            return null;
        }
        return $assign->var;
    }
}
