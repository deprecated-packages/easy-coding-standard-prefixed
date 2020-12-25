<?php

namespace _PhpScoper92597f5b42a7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper92597f5b42a7\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper92597f5b42a7\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
