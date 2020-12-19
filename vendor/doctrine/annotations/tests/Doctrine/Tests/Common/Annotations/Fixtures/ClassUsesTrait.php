<?php

namespace _PhpScoper269dc521b0fa\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper269dc521b0fa\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper269dc521b0fa\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
