<?php

namespace _PhpScoper6d28bdf6a7f9\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6d28bdf6a7f9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
