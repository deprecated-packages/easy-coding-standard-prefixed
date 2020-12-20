<?php

namespace _PhpScoper32136251d417\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper32136251d417\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper32136251d417\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
