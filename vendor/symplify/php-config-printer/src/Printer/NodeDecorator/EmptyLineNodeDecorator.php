<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Printer\NodeDecorator;

use _PhpScoper28ab463fc3ba\PhpParser\Node;
use _PhpScoper28ab463fc3ba\PhpParser\Node\Expr\Assign;
use _PhpScoper28ab463fc3ba\PhpParser\Node\Expr\Closure;
use _PhpScoper28ab463fc3ba\PhpParser\Node\Expr\MethodCall;
use _PhpScoper28ab463fc3ba\PhpParser\Node\Stmt;
use _PhpScoper28ab463fc3ba\PhpParser\Node\Stmt\Expression;
use _PhpScoper28ab463fc3ba\PhpParser\Node\Stmt\Nop;
use _PhpScoper28ab463fc3ba\PhpParser\NodeFinder;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
final class EmptyLineNodeDecorator
{
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoper28ab463fc3ba\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @param Node[] $stmts
     */
    public function decorate(array $stmts) : void
    {
        /** @var Closure|null $closure */
        $closure = $this->nodeFinder->findFirstInstanceOf($stmts, \_PhpScoper28ab463fc3ba\PhpParser\Node\Expr\Closure::class);
        if ($closure === null) {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        $newStmts = [];
        foreach ($closure->stmts as $key => $closureStmt) {
            if ($this->shouldAddEmptyLineBeforeStatement($key, $closureStmt)) {
                $newStmts[] = new \_PhpScoper28ab463fc3ba\PhpParser\Node\Stmt\Nop();
            }
            $newStmts[] = $closureStmt;
        }
        $closure->stmts = $newStmts;
    }
    private function shouldAddEmptyLineBeforeStatement(int $key, \_PhpScoper28ab463fc3ba\PhpParser\Node\Stmt $stmt) : bool
    {
        // do not add space before first item
        if ($key === 0) {
            return \false;
        }
        if (!$stmt instanceof \_PhpScoper28ab463fc3ba\PhpParser\Node\Stmt\Expression) {
            return \false;
        }
        $expr = $stmt->expr;
        if ($expr instanceof \_PhpScoper28ab463fc3ba\PhpParser\Node\Expr\Assign) {
            return \true;
        }
        return $expr instanceof \_PhpScoper28ab463fc3ba\PhpParser\Node\Expr\MethodCall;
    }
}
