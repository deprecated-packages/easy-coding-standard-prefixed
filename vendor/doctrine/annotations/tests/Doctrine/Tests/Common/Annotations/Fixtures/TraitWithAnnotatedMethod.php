<?php

namespace _PhpScoperd4c5032f0671\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd4c5032f0671\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
