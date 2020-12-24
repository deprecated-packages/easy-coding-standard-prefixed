<?php

namespace _PhpScopera37d6fb0b1ab\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera37d6fb0b1ab\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopera37d6fb0b1ab\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
