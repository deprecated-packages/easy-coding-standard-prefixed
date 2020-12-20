<?php

namespace _PhpScoper9885c8c176c7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9885c8c176c7\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper9885c8c176c7\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
