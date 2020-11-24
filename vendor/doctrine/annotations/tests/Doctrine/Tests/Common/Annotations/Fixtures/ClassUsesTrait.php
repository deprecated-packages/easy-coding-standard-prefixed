<?php

namespace _PhpScoper7108c819f5c5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7108c819f5c5\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper7108c819f5c5\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
