<?php

namespace _PhpScopere106f9fd4493\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere106f9fd4493\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
