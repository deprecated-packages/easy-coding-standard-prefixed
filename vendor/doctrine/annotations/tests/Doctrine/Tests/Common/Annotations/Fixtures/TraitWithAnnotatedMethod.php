<?php

namespace _PhpScoper065e4ba46e6d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper065e4ba46e6d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
