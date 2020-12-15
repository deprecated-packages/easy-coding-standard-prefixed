<?php

namespace _PhpScoper80dbed43490f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper80dbed43490f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
