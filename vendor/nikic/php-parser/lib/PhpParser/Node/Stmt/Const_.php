<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PhpParser\Node\Stmt;

use _PhpScoperc64a4ac1af35\PhpParser\Node;
class Const_ extends \_PhpScoperc64a4ac1af35\PhpParser\Node\Stmt
{
    /** @var Node\Const_[] Constant declarations */
    public $consts;
    /**
     * Constructs a const list node.
     *
     * @param Node\Const_[] $consts     Constant declarations
     * @param array         $attributes Additional attributes
     */
    public function __construct(array $consts, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->consts = $consts;
    }
    public function getSubNodeNames() : array
    {
        return ['consts'];
    }
    public function getType() : string
    {
        return 'Stmt_Const';
    }
}
