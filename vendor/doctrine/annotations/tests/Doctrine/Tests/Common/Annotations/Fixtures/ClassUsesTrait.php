<?php

namespace _PhpScoperbd5c5a045153\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperbd5c5a045153\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperbd5c5a045153\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
