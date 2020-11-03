<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayDimFetch;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Assign;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Expression;
use _PhpScoper2b44cb0c30af\PhpParser\PrettyPrinter\Standard;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
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
    public function __construct(\_PhpScoper2b44cb0c30af\PhpParser\PrettyPrinter\Standard $printerStandard)
    {
        $this->printerStandard = $printerStandard;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Assign::class];
    }
    /**
     * @param Assign $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$node->var instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayDimFetch) {
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
    private function haveSameArrayDimFetchNonEmptyRoot(\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayDimFetch $firstArrayDimFetch, \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayDimFetch $secondArrayDimFetch) : bool
    {
        $singleNestedFirstArrayDimFetch = $this->resolveSingleNestedArrayDimFetch($firstArrayDimFetch);
        $singleNestedSecondArrayDimFetch = $this->resolveSingleNestedArrayDimFetch($secondArrayDimFetch);
        if ($singleNestedFirstArrayDimFetch->dim === null) {
            return \false;
        }
        return $this->areNodesEqual($singleNestedFirstArrayDimFetch, $singleNestedSecondArrayDimFetch);
    }
    private function resolveSingleNestedArrayDimFetch(\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayDimFetch $arrayDimFetch) : \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayDimFetch
    {
        while ($arrayDimFetch->var instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayDimFetch) {
            $arrayDimFetch = $arrayDimFetch->var;
        }
        return $arrayDimFetch;
    }
    private function areNodesEqual(\_PhpScoper2b44cb0c30af\PhpParser\Node $firstNode, \_PhpScoper2b44cb0c30af\PhpParser\Node $secondNode) : bool
    {
        return $this->printerStandard->prettyPrint([$firstNode]) === $this->printerStandard->prettyPrint([$secondNode]);
    }
    private function matchParentArrayDimFetch(\_PhpScoper2b44cb0c30af\PhpParser\Node $node) : ?\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayDimFetch
    {
        $parent = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        if (!$parent instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Expression) {
            return null;
        }
        $previous = $parent->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PREVIOUS);
        if (!$previous instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Expression) {
            return null;
        }
        if (!$previous->expr instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Assign) {
            return null;
        }
        $assign = $previous->expr;
        if (!$assign->var instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayDimFetch) {
            return null;
        }
        return $assign->var;
    }
}
