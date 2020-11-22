<?php

namespace _PhpScoperac4e86be08e5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperac4e86be08e5\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperac4e86be08e5\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
