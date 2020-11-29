<?php

namespace _PhpScopercae980ebf12d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercae980ebf12d\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopercae980ebf12d\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
