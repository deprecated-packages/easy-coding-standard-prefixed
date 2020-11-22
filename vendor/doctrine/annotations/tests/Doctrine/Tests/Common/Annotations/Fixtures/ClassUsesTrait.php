<?php

namespace _PhpScoperfacc742d2745\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfacc742d2745\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperfacc742d2745\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
