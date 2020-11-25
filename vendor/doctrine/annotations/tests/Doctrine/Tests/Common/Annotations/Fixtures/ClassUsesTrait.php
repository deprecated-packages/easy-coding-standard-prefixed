<?php

namespace _PhpScoperaa402dd1b1f1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperaa402dd1b1f1\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperaa402dd1b1f1\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
