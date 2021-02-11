<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Printer\NodeDecorator;

use _PhpScoperef5048aa2573\PhpParser\Node;
use _PhpScoperef5048aa2573\PhpParser\Node\Expr\Assign;
use _PhpScoperef5048aa2573\PhpParser\Node\Expr\Closure;
use _PhpScoperef5048aa2573\PhpParser\Node\Expr\MethodCall;
use _PhpScoperef5048aa2573\PhpParser\Node\Stmt;
use _PhpScoperef5048aa2573\PhpParser\Node\Stmt\Expression;
use _PhpScoperef5048aa2573\PhpParser\Node\Stmt\Nop;
use _PhpScoperef5048aa2573\PhpParser\NodeFinder;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
final class EmptyLineNodeDecorator
{
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoperef5048aa2573\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @param Node[] $stmts
     */
    public function decorate(array $stmts) : void
    {
        $closure = $this->nodeFinder->findFirstInstanceOf($stmts, \_PhpScoperef5048aa2573\PhpParser\Node\Expr\Closure::class);
        if (!$closure instanceof \_PhpScoperef5048aa2573\PhpParser\Node\Expr\Closure) {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        $newStmts = [];
        foreach ($closure->stmts as $key => $closureStmt) {
            if ($this->shouldAddEmptyLineBeforeStatement($key, $closureStmt)) {
                $newStmts[] = new \_PhpScoperef5048aa2573\PhpParser\Node\Stmt\Nop();
            }
            $newStmts[] = $closureStmt;
        }
        $closure->stmts = $newStmts;
    }
    private function shouldAddEmptyLineBeforeStatement(int $key, \_PhpScoperef5048aa2573\PhpParser\Node\Stmt $stmt) : bool
    {
        // do not add space before first item
        if ($key === 0) {
            return \false;
        }
        if (!$stmt instanceof \_PhpScoperef5048aa2573\PhpParser\Node\Stmt\Expression) {
            return \false;
        }
        $expr = $stmt->expr;
        if ($expr instanceof \_PhpScoperef5048aa2573\PhpParser\Node\Expr\Assign) {
            return \true;
        }
        return $expr instanceof \_PhpScoperef5048aa2573\PhpParser\Node\Expr\MethodCall;
    }
}
