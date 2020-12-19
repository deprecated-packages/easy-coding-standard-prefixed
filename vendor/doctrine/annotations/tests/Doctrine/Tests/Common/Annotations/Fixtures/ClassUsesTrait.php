<?php

namespace _PhpScoper8b97b0dd6f5b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8b97b0dd6f5b\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper8b97b0dd6f5b\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
