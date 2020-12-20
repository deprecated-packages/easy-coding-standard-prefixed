<?php

namespace _PhpScoper57210e33e43a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper57210e33e43a\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper57210e33e43a\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
