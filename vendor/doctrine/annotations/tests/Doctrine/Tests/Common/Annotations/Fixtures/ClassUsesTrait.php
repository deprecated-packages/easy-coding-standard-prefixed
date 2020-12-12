<?php

namespace _PhpScoper04022cd986ec\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper04022cd986ec\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper04022cd986ec\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
