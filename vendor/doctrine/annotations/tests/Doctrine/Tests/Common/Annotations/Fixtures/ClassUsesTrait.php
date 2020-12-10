<?php

namespace _PhpScoper4edd80b4ab80\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4edd80b4ab80\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper4edd80b4ab80\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
