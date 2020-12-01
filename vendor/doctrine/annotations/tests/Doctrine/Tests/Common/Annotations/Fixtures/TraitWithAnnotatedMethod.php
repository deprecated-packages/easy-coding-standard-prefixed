<?php

namespace _PhpScoper6dbb854503f8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6dbb854503f8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
