<?php

namespace _PhpScoper6db4fde00cda\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6db4fde00cda\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper6db4fde00cda\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
