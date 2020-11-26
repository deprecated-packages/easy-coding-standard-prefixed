<?php

declare (strict_types=1);
namespace _PhpScoper4a718ec9156e\PhpParser\Node\Stmt;

use _PhpScoper4a718ec9156e\PhpParser\Node\Identifier;
use _PhpScoper4a718ec9156e\PhpParser\Node\Stmt;
class Label extends \_PhpScoper4a718ec9156e\PhpParser\Node\Stmt
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
        $this->name = \is_string($name) ? new \_PhpScoper4a718ec9156e\PhpParser\Node\Identifier($name) : $name;
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
