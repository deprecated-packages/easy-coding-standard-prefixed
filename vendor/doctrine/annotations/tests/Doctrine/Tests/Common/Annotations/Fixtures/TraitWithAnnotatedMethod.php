<?php

namespace _PhpScoper13133e188f67\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper13133e188f67\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
