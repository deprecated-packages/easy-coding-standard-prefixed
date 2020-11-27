<?php

namespace _PhpScoper776637f3d3c3\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper776637f3d3c3\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
