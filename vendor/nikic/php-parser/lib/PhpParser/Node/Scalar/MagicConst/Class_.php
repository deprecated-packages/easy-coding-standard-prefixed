<?php

declare (strict_types=1);
namespace _PhpScoperbd5fb781fe24\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperbd5fb781fe24\PhpParser\Node\Scalar\MagicConst;
class Class_ extends \_PhpScoperbd5fb781fe24\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__CLASS__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Class';
    }
}
