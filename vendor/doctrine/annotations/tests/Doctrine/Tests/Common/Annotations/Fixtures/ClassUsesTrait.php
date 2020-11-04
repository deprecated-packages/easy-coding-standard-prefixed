<?php

namespace _PhpScoperfabf55fef6b7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfabf55fef6b7\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperfabf55fef6b7\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
