<?php

namespace _PhpScoper7f5523334c1b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7f5523334c1b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
