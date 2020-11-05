<?php

namespace _PhpScoper39d23eef9a06\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper39d23eef9a06\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper39d23eef9a06\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
