<?php

namespace _PhpScoper8a05d21c15c9\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8a05d21c15c9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
