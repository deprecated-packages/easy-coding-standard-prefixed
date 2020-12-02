<?php

namespace _PhpScoper2d2a405cc0f8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2d2a405cc0f8\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper2d2a405cc0f8\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
