<?php

namespace _PhpScoper0270f1d35181\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper0270f1d35181\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper0270f1d35181\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
