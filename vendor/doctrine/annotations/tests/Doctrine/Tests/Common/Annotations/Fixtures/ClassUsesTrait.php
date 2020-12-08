<?php

namespace _PhpScoperf053e888b664\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf053e888b664\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperf053e888b664\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
