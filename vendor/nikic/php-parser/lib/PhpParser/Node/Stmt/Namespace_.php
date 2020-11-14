<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\PhpParser\Node\Stmt;

use _PhpScoperddde3ba4aebc\PhpParser\Node;
class Namespace_ extends \_PhpScoperddde3ba4aebc\PhpParser\Node\Stmt
{
    /* For use in the "kind" attribute */
    const KIND_SEMICOLON = 1;
    const KIND_BRACED = 2;
    /** @var null|Node\Name Name */
    public $name;
    /** @var Node\Stmt[] Statements */
    public $stmts;
    /**
     * Constructs a namespace node.
     *
     * @param null|Node\Name   $name       Name
     * @param null|Node\Stmt[] $stmts      Statements
     * @param array            $attributes Additional attributes
     */
    public function __construct(\_PhpScoperddde3ba4aebc\PhpParser\Node\Name $name = null, $stmts = [], array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->name = $name;
        $this->stmts = $stmts;
    }
    public function getSubNodeNames() : array
    {
        return ['name', 'stmts'];
    }
    public function getType() : string
    {
        return 'Stmt_Namespace';
    }
}
