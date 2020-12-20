<?php

namespace _PhpScoper9885c8c176c7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9885c8c176c7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
