<?php

namespace _PhpScoperd4937ee9b515\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd4937ee9b515\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
