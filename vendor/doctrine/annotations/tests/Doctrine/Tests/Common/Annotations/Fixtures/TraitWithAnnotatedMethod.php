<?php

namespace _PhpScoper48b5ec5b60cf\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper48b5ec5b60cf\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
