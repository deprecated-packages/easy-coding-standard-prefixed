<?php

namespace _PhpScoper3b1d73f28e67\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3b1d73f28e67\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper3b1d73f28e67\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
