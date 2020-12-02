<?php

namespace _PhpScoper6a0a7eb6e565\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6a0a7eb6e565\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper6a0a7eb6e565\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
