<?php

namespace _PhpScoperfacc742d2745\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfacc742d2745\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
