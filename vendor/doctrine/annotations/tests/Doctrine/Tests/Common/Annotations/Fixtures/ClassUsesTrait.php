<?php

namespace _PhpScoper57272265e1c9\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper57272265e1c9\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper57272265e1c9\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
