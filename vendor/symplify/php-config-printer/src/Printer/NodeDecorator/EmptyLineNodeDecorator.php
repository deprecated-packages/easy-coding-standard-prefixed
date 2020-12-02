<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Printer\NodeDecorator;

use _PhpScoperc95ae4bf942a\PhpParser\Node;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Expr\Assign;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Expr\Closure;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Expr\MethodCall;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Stmt;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Stmt\Expression;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Stmt\Nop;
use _PhpScoperc95ae4bf942a\PhpParser\NodeFinder;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
final class EmptyLineNodeDecorator
{
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoperc95ae4bf942a\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @param Node[] $stmts
     */
    public function decorate(array $stmts) : void
    {
        /** @var Closure|null $closure */
        $closure = $this->nodeFinder->findFirstInstanceOf($stmts, \_PhpScoperc95ae4bf942a\PhpParser\Node\Expr\Closure::class);
        if ($closure === null) {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        $newStmts = [];
        foreach ($closure->stmts as $key => $closureStmt) {
            if ($this->shouldAddEmptyLineBeforeStatement($key, $closureStmt)) {
                $newStmts[] = new \_PhpScoperc95ae4bf942a\PhpParser\Node\Stmt\Nop();
            }
            $newStmts[] = $closureStmt;
        }
        $closure->stmts = $newStmts;
    }
    private function shouldAddEmptyLineBeforeStatement(int $key, \_PhpScoperc95ae4bf942a\PhpParser\Node\Stmt $stmt) : bool
    {
        // do not add space before first item
        if ($key === 0) {
            return \false;
        }
        if (!$stmt instanceof \_PhpScoperc95ae4bf942a\PhpParser\Node\Stmt\Expression) {
            return \false;
        }
        $expr = $stmt->expr;
        if ($expr instanceof \_PhpScoperc95ae4bf942a\PhpParser\Node\Expr\Assign) {
            return \true;
        }
        return $expr instanceof \_PhpScoperc95ae4bf942a\PhpParser\Node\Expr\MethodCall;
    }
}
