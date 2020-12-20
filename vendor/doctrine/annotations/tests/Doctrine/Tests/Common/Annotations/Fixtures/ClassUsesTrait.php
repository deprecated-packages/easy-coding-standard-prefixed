<?php

namespace _PhpScopere205696a9dd6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere205696a9dd6\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopere205696a9dd6\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
