<?php

namespace _PhpScoperda2604e33acb\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperda2604e33acb\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperda2604e33acb\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
