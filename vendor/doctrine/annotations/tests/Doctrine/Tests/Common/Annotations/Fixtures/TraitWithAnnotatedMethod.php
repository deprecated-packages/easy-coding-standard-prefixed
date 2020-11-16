<?php

namespace _PhpScoper8e2d8a2760d1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8e2d8a2760d1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
