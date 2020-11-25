<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4\PhpParser\Node\Expr;

use _PhpScoperaac5f7c652e4\PhpParser\Node\Expr;
class List_ extends \_PhpScoperaac5f7c652e4\PhpParser\Node\Expr
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
