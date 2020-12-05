<?php

namespace _PhpScoperb6ccec8ab642\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb6ccec8ab642\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperb6ccec8ab642\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
