<?php

namespace _PhpScoper6207116d4311\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6207116d4311\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
