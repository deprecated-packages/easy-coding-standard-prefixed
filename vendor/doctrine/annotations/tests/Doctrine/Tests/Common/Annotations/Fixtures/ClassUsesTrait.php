<?php

namespace _PhpScoper9613f3fac51d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9613f3fac51d\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper9613f3fac51d\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
