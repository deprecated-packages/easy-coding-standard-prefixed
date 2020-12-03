<?php

namespace _PhpScoper6c2f17c43d2d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6c2f17c43d2d\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper6c2f17c43d2d\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
