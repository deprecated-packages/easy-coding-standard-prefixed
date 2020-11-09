<?php

namespace _PhpScoperf5f75c22067b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf5f75c22067b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
