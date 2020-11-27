<?php

namespace _PhpScoper578a67c80b2b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper578a67c80b2b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
