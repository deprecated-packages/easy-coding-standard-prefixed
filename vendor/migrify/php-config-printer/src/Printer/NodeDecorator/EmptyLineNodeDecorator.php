<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Printer\NodeDecorator;

use _PhpScoperb09c3ec8e01a\Migrify\MigrifyKernel\Exception\ShouldNotHappenException;
use _PhpScoperb09c3ec8e01a\PhpParser\Node;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Assign;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Closure;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Expression;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Nop;
use _PhpScoperb09c3ec8e01a\PhpParser\NodeFinder;
final class EmptyLineNodeDecorator
{
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoperb09c3ec8e01a\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @param Node[] $stmts
     */
    public function decorate(array $stmts) : void
    {
        /** @var Closure|null $closure */
        $closure = $this->nodeFinder->findFirstInstanceOf($stmts, \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Closure::class);
        if ($closure === null) {
            throw new \_PhpScoperb09c3ec8e01a\Migrify\MigrifyKernel\Exception\ShouldNotHappenException();
        }
        $newStmts = [];
        foreach ($closure->stmts as $key => $closureStmt) {
            if ($this->shouldAddEmptyLineBeforeStatement($key, $closureStmt)) {
                $newStmts[] = new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Nop();
            }
            $newStmts[] = $closureStmt;
        }
        $closure->stmts = $newStmts;
    }
    private function shouldAddEmptyLineBeforeStatement(int $key, \_PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt $stmt) : bool
    {
        // do not add space before first item
        if ($key === 0) {
            return \false;
        }
        if (!$stmt instanceof \_PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Expression) {
            return \false;
        }
        $expr = $stmt->expr;
        if ($expr instanceof \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Assign) {
            return \true;
        }
        return $expr instanceof \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall;
    }
}
