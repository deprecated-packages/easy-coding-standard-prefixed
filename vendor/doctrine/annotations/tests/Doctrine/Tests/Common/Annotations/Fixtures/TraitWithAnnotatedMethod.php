<?php

namespace _PhpScoper2637e9a72c68\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2637e9a72c68\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
