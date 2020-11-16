<?php

namespace _PhpScoperdf6a0b341030\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdf6a0b341030\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperdf6a0b341030\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
