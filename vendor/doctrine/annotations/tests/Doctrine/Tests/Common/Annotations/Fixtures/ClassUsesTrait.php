<?php

namespace _PhpScoper2f75f00bf6fa\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2f75f00bf6fa\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper2f75f00bf6fa\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
