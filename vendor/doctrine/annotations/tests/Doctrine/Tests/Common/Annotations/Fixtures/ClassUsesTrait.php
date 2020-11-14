<?php

namespace _PhpScopercda2b863d098\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercda2b863d098\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopercda2b863d098\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
