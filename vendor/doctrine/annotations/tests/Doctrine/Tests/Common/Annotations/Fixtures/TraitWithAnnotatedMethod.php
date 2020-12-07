<?php

namespace _PhpScoper89ec3c69e67d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper89ec3c69e67d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
