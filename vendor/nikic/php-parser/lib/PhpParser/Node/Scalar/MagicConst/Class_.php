<?php

declare (strict_types=1);
namespace _PhpScoperef870243cfdb\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperef870243cfdb\PhpParser\Node\Scalar\MagicConst;
class Class_ extends \_PhpScoperef870243cfdb\PhpParser\Node\Scalar\MagicConst
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
