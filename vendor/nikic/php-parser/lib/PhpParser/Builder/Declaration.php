<?php

declare (strict_types=1);
namespace _PhpScopere106f9fd4493\PhpParser\Builder;

use _PhpScopere106f9fd4493\PhpParser;
use _PhpScopere106f9fd4493\PhpParser\BuilderHelpers;
abstract class Declaration implements \_PhpScopere106f9fd4493\PhpParser\Builder
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
        $this->attributes['comments'] = [\_PhpScopere106f9fd4493\PhpParser\BuilderHelpers::normalizeDocComment($docComment)];
        return $this;
    }
}
