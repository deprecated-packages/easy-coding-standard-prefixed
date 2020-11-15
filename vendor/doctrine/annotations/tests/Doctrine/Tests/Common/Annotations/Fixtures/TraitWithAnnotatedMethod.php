<?php

namespace _PhpScoper64a921a5401b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper64a921a5401b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
