<?php

namespace _PhpScoper5ade29b97028\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5ade29b97028\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
