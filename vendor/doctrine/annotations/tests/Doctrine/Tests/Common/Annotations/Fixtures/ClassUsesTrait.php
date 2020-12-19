<?php

namespace _PhpScopera6f918786d5c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera6f918786d5c\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopera6f918786d5c\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
