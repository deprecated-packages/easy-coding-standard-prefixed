<?php

namespace _PhpScoper83a475a0590e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper83a475a0590e\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper83a475a0590e\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
