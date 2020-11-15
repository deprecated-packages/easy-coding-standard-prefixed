<?php

namespace _PhpScopercb576ca159b5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercb576ca159b5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
