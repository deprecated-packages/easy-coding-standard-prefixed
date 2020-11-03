<?php

namespace _PhpScopercf327c47dfc5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercf327c47dfc5\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopercf327c47dfc5\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
