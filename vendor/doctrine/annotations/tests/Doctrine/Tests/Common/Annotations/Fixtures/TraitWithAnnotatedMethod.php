<?php

namespace _PhpScoperbd5fb781fe24\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperbd5fb781fe24\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
