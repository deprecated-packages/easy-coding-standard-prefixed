<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Printer\NodeDecorator;

use _PhpScoper3e1e0e5bb8ef\Migrify\MigrifyKernel\Exception\ShouldNotHappenException;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\Assign;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\Closure;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt\Expression;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt\Nop;
use _PhpScoper3e1e0e5bb8ef\PhpParser\NodeFinder;
final class EmptyLineNodeDecorator
{
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoper3e1e0e5bb8ef\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @param Node[] $stmts
     */
    public function decorate(array $stmts) : void
    {
        /** @var Closure|null $closure */
        $closure = $this->nodeFinder->findFirstInstanceOf($stmts, \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\Closure::class);
        if ($closure === null) {
            throw new \_PhpScoper3e1e0e5bb8ef\Migrify\MigrifyKernel\Exception\ShouldNotHappenException();
        }
        $newStmts = [];
        foreach ($closure->stmts as $key => $closureStmt) {
            if ($this->shouldAddEmptyLineBeforeStatement($key, $closureStmt)) {
                $newStmts[] = new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt\Nop();
            }
            $newStmts[] = $closureStmt;
        }
        $closure->stmts = $newStmts;
    }
    private function shouldAddEmptyLineBeforeStatement(int $key, \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt $stmt) : bool
    {
        // do not add space before first item
        if ($key === 0) {
            return \false;
        }
        if (!$stmt instanceof \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt\Expression) {
            return \false;
        }
        $expr = $stmt->expr;
        if ($expr instanceof \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\Assign) {
            return \true;
        }
        return $expr instanceof \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall;
    }
}
