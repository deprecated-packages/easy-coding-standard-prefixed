<?php

namespace _PhpScoper8dd2e1c340b1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8dd2e1c340b1\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper8dd2e1c340b1\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
