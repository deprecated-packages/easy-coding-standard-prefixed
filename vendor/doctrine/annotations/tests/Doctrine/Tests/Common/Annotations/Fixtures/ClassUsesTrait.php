<?php

namespace _PhpScoperea337ed74749\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperea337ed74749\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperea337ed74749\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
