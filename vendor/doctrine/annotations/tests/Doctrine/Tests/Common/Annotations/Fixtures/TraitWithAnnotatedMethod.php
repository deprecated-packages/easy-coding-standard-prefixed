<?php

namespace _PhpScoper5a9febfbbe05\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5a9febfbbe05\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
