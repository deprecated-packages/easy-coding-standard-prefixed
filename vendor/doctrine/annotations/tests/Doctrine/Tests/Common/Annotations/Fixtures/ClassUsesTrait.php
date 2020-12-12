<?php

namespace _PhpScoper83b3b9a317c0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper83b3b9a317c0\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper83b3b9a317c0\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
