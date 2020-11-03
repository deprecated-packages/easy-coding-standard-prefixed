<?php

namespace _PhpScopera238de2e9b5a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera238de2e9b5a\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopera238de2e9b5a\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
