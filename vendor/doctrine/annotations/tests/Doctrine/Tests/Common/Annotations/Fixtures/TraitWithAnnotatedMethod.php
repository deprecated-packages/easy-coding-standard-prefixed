<?php

namespace _PhpScoper7108c819f5c5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7108c819f5c5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
