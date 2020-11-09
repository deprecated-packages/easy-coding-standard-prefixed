<?php

namespace _PhpScoperae959d396e95\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperae959d396e95\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
