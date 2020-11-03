<?php

namespace _PhpScoper589e8c04a9ef\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper589e8c04a9ef\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper589e8c04a9ef\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
