<?php

namespace _PhpScoper2a8ad010dfbd\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2a8ad010dfbd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
