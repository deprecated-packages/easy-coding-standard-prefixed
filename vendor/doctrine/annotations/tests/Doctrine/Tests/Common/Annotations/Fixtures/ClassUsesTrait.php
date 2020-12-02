<?php

namespace _PhpScopera34ae19e8d40\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera34ae19e8d40\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopera34ae19e8d40\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
