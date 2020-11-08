<?php

namespace _PhpScoper190659c42b56\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper190659c42b56\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
