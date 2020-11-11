<?php

namespace _PhpScoper0f5cd390c37a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper0f5cd390c37a\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper0f5cd390c37a\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
