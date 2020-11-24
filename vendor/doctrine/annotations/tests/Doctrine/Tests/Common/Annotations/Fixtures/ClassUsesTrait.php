<?php

namespace _PhpScoperf3d5f0921050\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf3d5f0921050\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperf3d5f0921050\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
