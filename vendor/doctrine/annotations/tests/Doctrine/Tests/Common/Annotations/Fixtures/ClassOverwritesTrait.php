<?php

namespace _PhpScopera04bf8e97c06\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera04bf8e97c06\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
class ClassOverwritesTrait
{
    use TraitWithAnnotatedMethod;
    /**
     * @Autoload
     */
    public function traitMethod()
    {
    }
}
namespace _PhpScopera04bf8e97c06\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
