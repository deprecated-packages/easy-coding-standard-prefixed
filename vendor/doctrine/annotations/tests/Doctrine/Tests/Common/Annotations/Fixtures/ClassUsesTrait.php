<?php

namespace _PhpScoper8751341571b5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8751341571b5\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper8751341571b5\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
