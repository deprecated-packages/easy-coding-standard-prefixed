<?php

namespace _PhpScoper418afc2f157c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper418afc2f157c\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper418afc2f157c\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
