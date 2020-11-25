<?php

declare (strict_types=1);
namespace _PhpScoperca8ca183ac38\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperca8ca183ac38\PhpParser\Node\Scalar\MagicConst;
class Method extends \_PhpScoperca8ca183ac38\PhpParser\Node\Scalar\MagicConst
{
    public function getName() : string
    {
        return '__METHOD__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Method';
    }
}
