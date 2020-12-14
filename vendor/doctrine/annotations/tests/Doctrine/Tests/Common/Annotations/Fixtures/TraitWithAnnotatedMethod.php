<?php

namespace _PhpScoper6224e3b16fcc\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6224e3b16fcc\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
