<?php

namespace _PhpScoper3b1d73f28e67\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3b1d73f28e67\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
trait TraitWithAnnotatedMethod
{
    /**
     * @Autoload
     */
    public $traitProperty;
    /**
     * @Autoload
     */
    public function traitMethod()
    {
    }
}
