<?php

namespace _PhpScopera04bf8e97c06\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera04bf8e97c06\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopera04bf8e97c06\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
