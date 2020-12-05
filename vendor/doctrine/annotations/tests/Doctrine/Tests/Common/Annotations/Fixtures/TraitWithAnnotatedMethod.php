<?php

namespace _PhpScoper56c9df53a081\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper56c9df53a081\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
