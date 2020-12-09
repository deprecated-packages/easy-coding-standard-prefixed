<?php

namespace _PhpScoperf65af7a6d9a0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf65af7a6d9a0\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperf65af7a6d9a0\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
