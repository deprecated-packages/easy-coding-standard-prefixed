<?php

namespace _PhpScoperdc8fbcd7c69d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdc8fbcd7c69d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
