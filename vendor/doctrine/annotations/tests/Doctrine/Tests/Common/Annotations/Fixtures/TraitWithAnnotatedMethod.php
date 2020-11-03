<?php

namespace _PhpScoper133be48300f9\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper133be48300f9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
