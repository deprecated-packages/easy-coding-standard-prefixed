<?php

namespace _PhpScoper776637f3d3c3\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper776637f3d3c3\Doctrine\Tests\Common\Annotations\Bar\Autoload;
class ClassUsesTrait
{
    use TraitWithAnnotatedMethod;
    /**
     * @Autoload
     */
    public $aProperty;
    /**
     * @Autoload
     */
    public function someMethod()
    {
    }
}
namespace _PhpScoper776637f3d3c3\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
