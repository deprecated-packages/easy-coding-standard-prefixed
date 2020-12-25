<?php

declare (strict_types=1);
namespace _PhpScoper9e3283ae8193\PhpParser\Node\Stmt;

use _PhpScoper9e3283ae8193\PhpParser\Node\Stmt;
class InlineHTML extends \_PhpScoper9e3283ae8193\PhpParser\Node\Stmt
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
