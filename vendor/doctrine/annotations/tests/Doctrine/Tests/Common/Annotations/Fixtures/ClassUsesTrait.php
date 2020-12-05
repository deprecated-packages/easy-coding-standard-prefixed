<?php

namespace _PhpScoperbaf90856897c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperbaf90856897c\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperbaf90856897c\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
