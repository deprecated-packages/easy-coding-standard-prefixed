<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Printer\NodeDecorator;

use _PhpScoperedc2e0c967db\Migrify\MigrifyKernel\Exception\ShouldNotHappenException;
use _PhpScoperedc2e0c967db\PhpParser\Node;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\Assign;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\Closure;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall;
use _PhpScoperedc2e0c967db\PhpParser\Node\Stmt;
use _PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Expression;
use _PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Nop;
use _PhpScoperedc2e0c967db\PhpParser\NodeFinder;
final class EmptyLineNodeDecorator
{
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoperedc2e0c967db\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @param Node[] $stmts
     */
    public function decorate(array $stmts) : void
    {
        /** @var Closure|null $closure */
        $closure = $this->nodeFinder->findFirstInstanceOf($stmts, \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\Closure::class);
        if ($closure === null) {
            throw new \_PhpScoperedc2e0c967db\Migrify\MigrifyKernel\Exception\ShouldNotHappenException();
        }
        $newStmts = [];
        foreach ($closure->stmts as $key => $closureStmt) {
            if ($this->shouldAddEmptyLineBeforeStatement($key, $closureStmt)) {
                $newStmts[] = new \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Nop();
            }
            $newStmts[] = $closureStmt;
        }
        $closure->stmts = $newStmts;
    }
    private function shouldAddEmptyLineBeforeStatement(int $key, \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt $stmt) : bool
    {
        // do not add space before first item
        if ($key === 0) {
            return \false;
        }
        if (!$stmt instanceof \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Expression) {
            return \false;
        }
        $expr = $stmt->expr;
        if ($expr instanceof \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\Assign) {
            return \true;
        }
        return $expr instanceof \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall;
    }
}
