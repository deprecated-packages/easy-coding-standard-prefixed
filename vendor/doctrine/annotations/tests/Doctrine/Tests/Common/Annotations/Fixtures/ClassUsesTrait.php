<?php

namespace _PhpScoper167729fa1dde\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper167729fa1dde\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper167729fa1dde\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
