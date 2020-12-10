<?php

namespace _PhpScoper6250f8d25076\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6250f8d25076\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper6250f8d25076\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
