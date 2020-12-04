<?php

namespace _PhpScoperc233426b15e0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc233426b15e0\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperc233426b15e0\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
