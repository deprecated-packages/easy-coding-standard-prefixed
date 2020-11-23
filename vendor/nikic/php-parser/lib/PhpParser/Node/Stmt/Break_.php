<?php

declare (strict_types=1);
namespace _PhpScoperc4b135661b3a\PhpParser\Node\Stmt;

use _PhpScoperc4b135661b3a\PhpParser\Node;
class Break_ extends \_PhpScoperc4b135661b3a\PhpParser\Node\Stmt
{
    /** @var null|Node\Expr Number of loops to break */
    public $num;
    /**
     * Constructs a break node.
     *
     * @param null|Node\Expr $num        Number of loops to break
     * @param array          $attributes Additional attributes
     */
    public function __construct(\_PhpScoperc4b135661b3a\PhpParser\Node\Expr $num = null, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->num = $num;
    }
    public function getSubNodeNames() : array
    {
        return ['num'];
    }
    public function getType() : string
    {
        return 'Stmt_Break';
    }
}
