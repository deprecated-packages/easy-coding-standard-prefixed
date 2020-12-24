<?php

namespace _PhpScopere106f9fd4493\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere106f9fd4493\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopere106f9fd4493\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
