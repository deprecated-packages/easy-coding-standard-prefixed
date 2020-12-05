<?php

declare (strict_types=1);
namespace _PhpScoper81b3ff5ab9fe\PhpParser\Node\Stmt;

use _PhpScoper81b3ff5ab9fe\PhpParser\Node\Stmt;
class HaltCompiler extends \_PhpScoper81b3ff5ab9fe\PhpParser\Node\Stmt
{
    /** @var string Remaining text after halt compiler statement. */
    public $remaining;
    /**
     * Constructs a __halt_compiler node.
     *
     * @param string $remaining  Remaining text after halt compiler statement.
     * @param array  $attributes Additional attributes
     */
    public function __construct(string $remaining, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->remaining = $remaining;
    }
    public function getSubNodeNames() : array
    {
        return ['remaining'];
    }
    public function getType() : string
    {
        return 'Stmt_HaltCompiler';
    }
}
