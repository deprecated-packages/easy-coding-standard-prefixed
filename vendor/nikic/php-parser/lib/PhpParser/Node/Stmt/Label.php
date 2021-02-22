<?php

declare (strict_types=1);
namespace _PhpScoperfcee700af3df\PhpParser\Node\Stmt;

use _PhpScoperfcee700af3df\PhpParser\Node\Identifier;
use _PhpScoperfcee700af3df\PhpParser\Node\Stmt;
class Label extends \_PhpScoperfcee700af3df\PhpParser\Node\Stmt
{
    /** @var Identifier Name */
    public $name;
    /**
     * Constructs a label node.
     *
     * @param string|Identifier $name       Name
     * @param array             $attributes Additional attributes
     */
    public function __construct($name, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->name = \is_string($name) ? new \_PhpScoperfcee700af3df\PhpParser\Node\Identifier($name) : $name;
    }
    public function getSubNodeNames() : array
    {
        return ['name'];
    }
    public function getType() : string
    {
        return 'Stmt_Label';
    }
}
