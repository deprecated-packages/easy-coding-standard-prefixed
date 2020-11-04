<?php

namespace _PhpScoper7145e5e87de5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7145e5e87de5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
