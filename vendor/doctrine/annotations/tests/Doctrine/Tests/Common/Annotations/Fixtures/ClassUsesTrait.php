<?php

namespace _PhpScoper666af036e800\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper666af036e800\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper666af036e800\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
