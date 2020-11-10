<?php

namespace _PhpScoper48800f361566\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper48800f361566\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper48800f361566\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
