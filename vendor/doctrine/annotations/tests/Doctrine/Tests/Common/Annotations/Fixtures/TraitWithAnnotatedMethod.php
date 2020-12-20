<?php

namespace _PhpScoper32136251d417\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper32136251d417\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
