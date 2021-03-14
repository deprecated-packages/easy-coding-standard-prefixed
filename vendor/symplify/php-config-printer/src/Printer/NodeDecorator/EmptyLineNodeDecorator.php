<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Printer\NodeDecorator;

use _PhpScoperfb0714773dc5\PhpParser\Node;
use _PhpScoperfb0714773dc5\PhpParser\Node\Expr\Assign;
use _PhpScoperfb0714773dc5\PhpParser\Node\Expr\Closure;
use _PhpScoperfb0714773dc5\PhpParser\Node\Expr\MethodCall;
use _PhpScoperfb0714773dc5\PhpParser\Node\Stmt;
use _PhpScoperfb0714773dc5\PhpParser\Node\Stmt\Expression;
use _PhpScoperfb0714773dc5\PhpParser\Node\Stmt\Nop;
use _PhpScoperfb0714773dc5\PhpParser\NodeFinder;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
final class EmptyLineNodeDecorator
{
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoperfb0714773dc5\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @param Node[] $stmts
     */
    public function decorate(array $stmts) : void
    {
        $closure = $this->nodeFinder->findFirstInstanceOf($stmts, \_PhpScoperfb0714773dc5\PhpParser\Node\Expr\Closure::class);
        if (!$closure instanceof \_PhpScoperfb0714773dc5\PhpParser\Node\Expr\Closure) {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        $newStmts = [];
        foreach ($closure->stmts as $key => $closureStmt) {
            if ($this->shouldAddEmptyLineBeforeStatement($key, $closureStmt)) {
                $newStmts[] = new \_PhpScoperfb0714773dc5\PhpParser\Node\Stmt\Nop();
            }
            $newStmts[] = $closureStmt;
        }
        $closure->stmts = $newStmts;
    }
    private function shouldAddEmptyLineBeforeStatement(int $key, \_PhpScoperfb0714773dc5\PhpParser\Node\Stmt $stmt) : bool
    {
        // do not add space before first item
        if ($key === 0) {
            return \false;
        }
        if (!$stmt instanceof \_PhpScoperfb0714773dc5\PhpParser\Node\Stmt\Expression) {
            return \false;
        }
        $expr = $stmt->expr;
        if ($expr instanceof \_PhpScoperfb0714773dc5\PhpParser\Node\Expr\Assign) {
            return \true;
        }
        return $expr instanceof \_PhpScoperfb0714773dc5\PhpParser\Node\Expr\MethodCall;
    }
}
