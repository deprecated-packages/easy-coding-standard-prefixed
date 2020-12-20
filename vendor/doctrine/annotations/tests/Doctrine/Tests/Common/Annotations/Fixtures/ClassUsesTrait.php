<?php

namespace _PhpScoper5384d7276e1f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5384d7276e1f\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper5384d7276e1f\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
