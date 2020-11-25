<?php

namespace _PhpScoper833c56a97273\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper833c56a97273\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper833c56a97273\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
