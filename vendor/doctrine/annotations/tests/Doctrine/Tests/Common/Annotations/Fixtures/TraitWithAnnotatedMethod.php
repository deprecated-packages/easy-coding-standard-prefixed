<?php

namespace _PhpScopere5e7dca8c031\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere5e7dca8c031\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
