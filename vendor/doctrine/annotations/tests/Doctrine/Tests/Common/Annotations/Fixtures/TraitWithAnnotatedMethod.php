<?php

namespace _PhpScopera061b8a47e36\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera061b8a47e36\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
