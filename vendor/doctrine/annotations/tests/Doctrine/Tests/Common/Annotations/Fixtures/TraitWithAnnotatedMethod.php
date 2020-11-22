<?php

namespace _PhpScoper21fff473f90a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper21fff473f90a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
