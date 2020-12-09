<?php

namespace _PhpScoper9b9ddfd01528\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9b9ddfd01528\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
