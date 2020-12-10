<?php

namespace _PhpScoper8dd2e1c340b1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8dd2e1c340b1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
