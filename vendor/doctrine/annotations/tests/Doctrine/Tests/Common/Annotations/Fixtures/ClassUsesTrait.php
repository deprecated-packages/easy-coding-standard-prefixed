<?php

namespace _PhpScoper2a8ad010dfbd\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2a8ad010dfbd\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper2a8ad010dfbd\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
