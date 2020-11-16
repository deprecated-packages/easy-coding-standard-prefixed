<?php

namespace _PhpScoperad4605bb9267\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperad4605bb9267\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperad4605bb9267\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
