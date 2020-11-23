<?php

namespace _PhpScopere341acab57d4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere341acab57d4\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopere341acab57d4\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
