<?php

namespace _PhpScoperfb2c402b972b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfb2c402b972b\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperfb2c402b972b\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
