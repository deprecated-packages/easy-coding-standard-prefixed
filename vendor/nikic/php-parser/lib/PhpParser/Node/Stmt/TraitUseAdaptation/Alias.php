<?php

declare (strict_types=1);
namespace _PhpScoperd301db66c80c\PhpParser\Node\Stmt\TraitUseAdaptation;

use _PhpScoperd301db66c80c\PhpParser\Node;
class Alias extends \_PhpScoperd301db66c80c\PhpParser\Node\Stmt\TraitUseAdaptation
{
    /** @var null|int New modifier */
    public $newModifier;
    /** @var null|Node\Identifier New name */
    public $newName;
    /**
     * Constructs a trait use precedence adaptation node.
     *
     * @param null|Node\Name              $trait       Trait name
     * @param string|Node\Identifier      $method      Method name
     * @param null|int                    $newModifier New modifier
     * @param null|string|Node\Identifier $newName     New name
     * @param array                       $attributes  Additional attributes
     */
    public function __construct($trait, $method, $newModifier, $newName, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->trait = $trait;
        $this->method = \is_string($method) ? new \_PhpScoperd301db66c80c\PhpParser\Node\Identifier($method) : $method;
        $this->newModifier = $newModifier;
        $this->newName = \is_string($newName) ? new \_PhpScoperd301db66c80c\PhpParser\Node\Identifier($newName) : $newName;
    }
    public function getSubNodeNames() : array
    {
        return ['trait', 'method', 'newModifier', 'newName'];
    }
    public function getType() : string
    {
        return 'Stmt_TraitUseAdaptation_Alias';
    }
}
