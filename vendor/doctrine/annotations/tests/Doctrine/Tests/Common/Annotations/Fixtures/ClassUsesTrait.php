<?php

namespace _PhpScopera9d6b451df71\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera9d6b451df71\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopera9d6b451df71\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
