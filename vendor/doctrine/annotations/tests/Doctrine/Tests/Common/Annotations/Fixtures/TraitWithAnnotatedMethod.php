<?php

namespace _PhpScoper7c0f822a05e1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7c0f822a05e1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
