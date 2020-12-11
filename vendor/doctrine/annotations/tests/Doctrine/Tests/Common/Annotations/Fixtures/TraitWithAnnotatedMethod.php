<?php

namespace _PhpScopere4fa57261c04\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere4fa57261c04\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
