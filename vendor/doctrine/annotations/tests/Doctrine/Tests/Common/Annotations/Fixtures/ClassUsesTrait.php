<?php

namespace _PhpScoperd4c5032f0671\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd4c5032f0671\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperd4c5032f0671\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
