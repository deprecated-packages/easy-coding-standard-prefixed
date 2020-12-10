<?php

namespace _PhpScoper2731c1906fe4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2731c1906fe4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
