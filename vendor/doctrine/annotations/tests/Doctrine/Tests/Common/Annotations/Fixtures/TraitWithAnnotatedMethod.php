<?php

namespace _PhpScoper0d0ee1ba46d4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper0d0ee1ba46d4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
