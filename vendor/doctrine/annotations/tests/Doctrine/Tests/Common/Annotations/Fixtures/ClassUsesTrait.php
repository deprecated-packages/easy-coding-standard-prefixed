<?php

namespace _PhpScoper8de082cbb8c7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8de082cbb8c7\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper8de082cbb8c7\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
