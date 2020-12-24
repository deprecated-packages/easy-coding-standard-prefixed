<?php

declare (strict_types=1);
namespace _PhpScopera37d6fb0b1ab\PhpParser\Builder;

use _PhpScopera37d6fb0b1ab\PhpParser;
use _PhpScopera37d6fb0b1ab\PhpParser\BuilderHelpers;
abstract class Declaration implements \_PhpScopera37d6fb0b1ab\PhpParser\Builder
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
        $this->attributes['comments'] = [\_PhpScopera37d6fb0b1ab\PhpParser\BuilderHelpers::normalizeDocComment($docComment)];
        return $this;
    }
}
