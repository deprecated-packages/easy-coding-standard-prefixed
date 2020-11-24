<?php

namespace _PhpScoperbd5fb781fe24\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperbd5fb781fe24\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperbd5fb781fe24\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
