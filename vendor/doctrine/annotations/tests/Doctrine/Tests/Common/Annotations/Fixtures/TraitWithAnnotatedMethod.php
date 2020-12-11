<?php

namespace _PhpScoper23ef26a4fb01\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper23ef26a4fb01\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
