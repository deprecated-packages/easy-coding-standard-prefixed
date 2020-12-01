<?php

namespace _PhpScoper9613f3fac51d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9613f3fac51d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
