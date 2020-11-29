<?php

namespace _PhpScoper28ab463fc3ba\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper28ab463fc3ba\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper28ab463fc3ba\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
