<?php

namespace _PhpScopera189153e1f79\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera189153e1f79\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
