<?php

declare (strict_types=1);
namespace _PhpScoper13133e188f67\PhpParser\Builder;

use _PhpScoper13133e188f67\PhpParser;
use _PhpScoper13133e188f67\PhpParser\BuilderHelpers;
abstract class Declaration implements \_PhpScoper13133e188f67\PhpParser\Builder
{
    protected $attributes = [];
    public abstract function addStmt($stmt);
    /**
     * Adds multiple statements.
     *
     * @param array $stmts The statements to add
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addStmts(array $stmts)
    {
        foreach ($stmts as $stmt) {
            $this->addStmt($stmt);
        }
        return $this;
    }
    /**
     * Sets doc comment for the declaration.
     *
     * @param PhpParser\Comment\Doc|string $docComment Doc comment to set
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function setDocComment($docComment)
    {
        $this->attributes['comments'] = [\_PhpScoper13133e188f67\PhpParser\BuilderHelpers::normalizeDocComment($docComment)];
        return $this;
    }
}
