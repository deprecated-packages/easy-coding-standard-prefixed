<?php

namespace _PhpScoper7f5523334c1b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7f5523334c1b\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper7f5523334c1b\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
