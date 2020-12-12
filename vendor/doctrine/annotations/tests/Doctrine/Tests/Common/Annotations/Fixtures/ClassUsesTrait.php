<?php

namespace _PhpScoper326bba7310a2\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper326bba7310a2\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper326bba7310a2\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
