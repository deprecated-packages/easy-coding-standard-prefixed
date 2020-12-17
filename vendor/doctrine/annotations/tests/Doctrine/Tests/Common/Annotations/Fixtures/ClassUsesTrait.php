<?php

namespace _PhpScopercf909b66eba8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercf909b66eba8\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopercf909b66eba8\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
