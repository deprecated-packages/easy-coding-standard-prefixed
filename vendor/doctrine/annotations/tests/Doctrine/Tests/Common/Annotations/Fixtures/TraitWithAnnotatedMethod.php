<?php

namespace _PhpScoper5465fda93cc7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5465fda93cc7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
