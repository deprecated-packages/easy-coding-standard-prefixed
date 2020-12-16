<?php

namespace _PhpScoperd35c27cd4b09\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd35c27cd4b09\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperd35c27cd4b09\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
