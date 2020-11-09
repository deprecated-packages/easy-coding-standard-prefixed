<?php

namespace _PhpScopere015d8a3273c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere015d8a3273c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
