<?php

namespace _PhpScoperfabf55fef6b7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfabf55fef6b7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
