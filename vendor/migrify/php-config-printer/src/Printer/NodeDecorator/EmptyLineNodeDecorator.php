<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\Printer\NodeDecorator;

use _PhpScoperc753ccca5a0c\Migrify\MigrifyKernel\Exception\ShouldNotHappenException;
use _PhpScoperc753ccca5a0c\PhpParser\Node;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Assign;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Closure;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Stmt;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Stmt\Expression;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Stmt\Nop;
use _PhpScoperc753ccca5a0c\PhpParser\NodeFinder;
final class EmptyLineNodeDecorator
{
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoperc753ccca5a0c\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @param Node[] $stmts
     */
    public function decorate(array $stmts) : void
    {
        /** @var Closure|null $closure */
        $closure = $this->nodeFinder->findFirstInstanceOf($stmts, \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Closure::class);
        if ($closure === null) {
            throw new \_PhpScoperc753ccca5a0c\Migrify\MigrifyKernel\Exception\ShouldNotHappenException();
        }
        $newStmts = [];
        foreach ($closure->stmts as $key => $closureStmt) {
            if ($this->shouldAddEmptyLineBeforeStatement($key, $closureStmt)) {
                $newStmts[] = new \_PhpScoperc753ccca5a0c\PhpParser\Node\Stmt\Nop();
            }
            $newStmts[] = $closureStmt;
        }
        $closure->stmts = $newStmts;
    }
    private function shouldAddEmptyLineBeforeStatement(int $key, \_PhpScoperc753ccca5a0c\PhpParser\Node\Stmt $stmt) : bool
    {
        // do not add space before first item
        if ($key === 0) {
            return \false;
        }
        if (!$stmt instanceof \_PhpScoperc753ccca5a0c\PhpParser\Node\Stmt\Expression) {
            return \false;
        }
        $expr = $stmt->expr;
        if ($expr instanceof \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Assign) {
            return \true;
        }
        return $expr instanceof \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall;
    }
}
