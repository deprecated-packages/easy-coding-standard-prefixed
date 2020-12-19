<?php

namespace _PhpScoper59da9ac954a6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper59da9ac954a6\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper59da9ac954a6\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
