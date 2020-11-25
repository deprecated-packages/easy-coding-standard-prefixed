<?php

namespace _PhpScoper2f75f00bf6fa\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2f75f00bf6fa\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
