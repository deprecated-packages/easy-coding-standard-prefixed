<?php

namespace _PhpScopera749ac204cd2\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera749ac204cd2\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
