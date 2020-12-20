<?php

namespace _PhpScoper967d20dce97a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper967d20dce97a\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper967d20dce97a\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
