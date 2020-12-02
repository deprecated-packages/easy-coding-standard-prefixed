<?php

declare (strict_types=1);
namespace _PhpScoperc95ae4bf942a\PhpParser\Node\Expr;

use _PhpScoperc95ae4bf942a\PhpParser\Node\Expr;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Identifier;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Name;
class ClassConstFetch extends \_PhpScoperc95ae4bf942a\PhpParser\Node\Expr
{
    /** @var Name|Expr Class name */
    public $class;
    /** @var Identifier|Error Constant name */
    public $name;
    /**
     * Constructs a class const fetch node.
     *
     * @param Name|Expr               $class      Class name
     * @param string|Identifier|Error $name       Constant name
     * @param array                   $attributes Additional attributes
     */
    public function __construct($class, $name, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->class = $class;
        $this->name = \is_string($name) ? new \_PhpScoperc95ae4bf942a\PhpParser\Node\Identifier($name) : $name;
    }
    public function getSubNodeNames() : array
    {
        return ['class', 'name'];
    }
    public function getType() : string
    {
        return 'Expr_ClassConstFetch';
    }
}
