<?php

namespace _PhpScoper8e2d8a2760d1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8e2d8a2760d1\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper8e2d8a2760d1\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
