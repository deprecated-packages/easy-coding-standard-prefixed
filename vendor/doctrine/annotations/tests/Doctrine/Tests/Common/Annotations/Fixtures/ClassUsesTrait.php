<?php

namespace _PhpScoper4d3fa30a680b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4d3fa30a680b\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper4d3fa30a680b\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
