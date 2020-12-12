<?php

namespace _PhpScoperdaf95aff095b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdaf95aff095b\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperdaf95aff095b\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
