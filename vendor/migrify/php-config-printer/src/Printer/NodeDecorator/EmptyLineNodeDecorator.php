<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\Printer\NodeDecorator;

use _PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\Exception\ShouldNotHappenException;
use _PhpScoperb6d4bd368bd9\PhpParser\Node;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\Assign;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\Closure;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt\Expression;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt\Nop;
use _PhpScoperb6d4bd368bd9\PhpParser\NodeFinder;
final class EmptyLineNodeDecorator
{
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoperb6d4bd368bd9\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @param Node[] $stmts
     */
    public function decorate(array $stmts) : void
    {
        /** @var Closure|null $closure */
        $closure = $this->nodeFinder->findFirstInstanceOf($stmts, \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\Closure::class);
        if ($closure === null) {
            throw new \_PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\Exception\ShouldNotHappenException();
        }
        $newStmts = [];
        foreach ($closure->stmts as $key => $closureStmt) {
            if ($this->shouldAddEmptyLineBeforeStatement($key, $closureStmt)) {
                $newStmts[] = new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt\Nop();
            }
            $newStmts[] = $closureStmt;
        }
        $closure->stmts = $newStmts;
    }
    private function shouldAddEmptyLineBeforeStatement(int $key, \_PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt $stmt) : bool
    {
        // do not add space before first item
        if ($key === 0) {
            return \false;
        }
        if (!$stmt instanceof \_PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt\Expression) {
            return \false;
        }
        $expr = $stmt->expr;
        if ($expr instanceof \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\Assign) {
            return \true;
        }
        return $expr instanceof \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall;
    }
}
