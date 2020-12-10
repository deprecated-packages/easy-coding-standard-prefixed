<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Printer\NodeDecorator;

use _PhpScoperfab1bfb7ec99\PhpParser\Node;
use _PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\Assign;
use _PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\Closure;
use _PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\MethodCall;
use _PhpScoperfab1bfb7ec99\PhpParser\Node\Stmt;
use _PhpScoperfab1bfb7ec99\PhpParser\Node\Stmt\Expression;
use _PhpScoperfab1bfb7ec99\PhpParser\Node\Stmt\Nop;
use _PhpScoperfab1bfb7ec99\PhpParser\NodeFinder;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
final class EmptyLineNodeDecorator
{
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoperfab1bfb7ec99\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @param Node[] $stmts
     */
    public function decorate(array $stmts) : void
    {
        /** @var Closure|null $closure */
        $closure = $this->nodeFinder->findFirstInstanceOf($stmts, \_PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\Closure::class);
        if ($closure === null) {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        $newStmts = [];
        foreach ($closure->stmts as $key => $closureStmt) {
            if ($this->shouldAddEmptyLineBeforeStatement($key, $closureStmt)) {
                $newStmts[] = new \_PhpScoperfab1bfb7ec99\PhpParser\Node\Stmt\Nop();
            }
            $newStmts[] = $closureStmt;
        }
        $closure->stmts = $newStmts;
    }
    private function shouldAddEmptyLineBeforeStatement(int $key, \_PhpScoperfab1bfb7ec99\PhpParser\Node\Stmt $stmt) : bool
    {
        // do not add space before first item
        if ($key === 0) {
            return \false;
        }
        if (!$stmt instanceof \_PhpScoperfab1bfb7ec99\PhpParser\Node\Stmt\Expression) {
            return \false;
        }
        $expr = $stmt->expr;
        if ($expr instanceof \_PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\Assign) {
            return \true;
        }
        return $expr instanceof \_PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\MethodCall;
    }
}
