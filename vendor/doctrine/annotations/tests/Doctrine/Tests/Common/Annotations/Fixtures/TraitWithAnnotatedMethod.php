<?php

namespace _PhpScoper8acb416c2f5a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8acb416c2f5a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
