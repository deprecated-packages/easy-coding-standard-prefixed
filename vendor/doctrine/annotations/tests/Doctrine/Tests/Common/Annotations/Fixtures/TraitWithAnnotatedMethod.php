<?php

namespace _PhpScopercae980ebf12d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercae980ebf12d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
