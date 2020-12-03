<?php

namespace _PhpScoper5c006f5f032f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5c006f5f032f\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper5c006f5f032f\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
