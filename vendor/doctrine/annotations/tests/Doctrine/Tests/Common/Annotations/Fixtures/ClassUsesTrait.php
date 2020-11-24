<?php

namespace _PhpScoper528afa732cbd\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper528afa732cbd\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper528afa732cbd\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
