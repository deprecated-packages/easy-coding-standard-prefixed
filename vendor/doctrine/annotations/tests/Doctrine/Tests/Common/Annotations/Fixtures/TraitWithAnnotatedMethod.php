<?php

namespace _PhpScoper908feaf49cd8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper908feaf49cd8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
