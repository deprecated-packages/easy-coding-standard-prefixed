<?php

declare (strict_types=1);
namespace _PhpScoper83a475a0590e\PhpParser\Node\Stmt;

use _PhpScoper83a475a0590e\PhpParser\Node\Stmt;
class InlineHTML extends \_PhpScoper83a475a0590e\PhpParser\Node\Stmt
{
    /** @var string String */
    public $value;
    /**
     * Constructs an inline HTML node.
     *
     * @param string $value      String
     * @param array  $attributes Additional attributes
     */
    public function __construct(string $value, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->value = $value;
    }
    public function getSubNodeNames() : array
    {
        return ['value'];
    }
    public function getType() : string
    {
        return 'Stmt_InlineHTML';
    }
}
