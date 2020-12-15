<?php

namespace _PhpScoperdeea1786e972\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdeea1786e972\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperdeea1786e972\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
