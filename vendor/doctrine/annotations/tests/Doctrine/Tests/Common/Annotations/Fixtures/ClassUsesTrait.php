<?php

namespace _PhpScoper836bc32aecc2\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper836bc32aecc2\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper836bc32aecc2\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
