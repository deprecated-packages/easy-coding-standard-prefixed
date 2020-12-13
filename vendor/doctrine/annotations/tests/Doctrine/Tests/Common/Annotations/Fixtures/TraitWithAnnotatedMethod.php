<?php

namespace _PhpScoper8db4616aa69d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8db4616aa69d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
