<?php

namespace _PhpScoperb83706991c7f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb83706991c7f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
