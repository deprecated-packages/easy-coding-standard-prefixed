<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PhpParser\Node\Expr;

use _PhpScoperba24099fc6fd\PhpParser\Node\Expr;
use _PhpScoperba24099fc6fd\PhpParser\Node\Identifier;
use _PhpScoperba24099fc6fd\PhpParser\Node\Name;
class ClassConstFetch extends \_PhpScoperba24099fc6fd\PhpParser\Node\Expr
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
        $this->name = \is_string($name) ? new \_PhpScoperba24099fc6fd\PhpParser\Node\Identifier($name) : $name;
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
