<?php

namespace _PhpScoper66292c14b658\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper66292c14b658\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper66292c14b658\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
