<?php

namespace _PhpScoperaba240c3d5f1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperaba240c3d5f1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
