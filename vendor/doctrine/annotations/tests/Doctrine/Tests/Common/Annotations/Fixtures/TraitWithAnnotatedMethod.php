<?php

namespace _PhpScoper229e8121cf9f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper229e8121cf9f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
