<?php

declare (strict_types=1);
namespace _PhpScopera88a8b9f064a\PhpParser\Node\Expr;

use _PhpScopera88a8b9f064a\PhpParser\Node\Expr;
class List_ extends \_PhpScopera88a8b9f064a\PhpParser\Node\Expr
{
    /** @var (ArrayItem|null)[] List of items to assign to */
    public $items;
    /**
     * Constructs a list() destructuring node.
     *
     * @param (ArrayItem|null)[] $items      List of items to assign to
     * @param array              $attributes Additional attributes
     */
    public function __construct(array $items, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->items = $items;
    }
    public function getSubNodeNames() : array
    {
        return ['items'];
    }
    public function getType() : string
    {
        return 'Expr_List';
    }
}
