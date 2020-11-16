<?php

namespace _PhpScoper4d05106cc3c0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4d05106cc3c0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
