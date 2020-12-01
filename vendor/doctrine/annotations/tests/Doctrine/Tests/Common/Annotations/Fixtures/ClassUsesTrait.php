<?php

namespace _PhpScoperd74b3ed28382\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd74b3ed28382\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperd74b3ed28382\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
