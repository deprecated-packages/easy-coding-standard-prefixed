<?php

namespace _PhpScoper16399a42e87c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper16399a42e87c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
