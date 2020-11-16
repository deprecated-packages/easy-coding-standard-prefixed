<?php

namespace _PhpScoper239b374a39c8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper239b374a39c8\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper239b374a39c8\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
