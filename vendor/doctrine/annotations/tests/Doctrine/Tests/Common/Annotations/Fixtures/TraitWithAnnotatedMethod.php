<?php

namespace _PhpScoper611f49771945\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper611f49771945\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
