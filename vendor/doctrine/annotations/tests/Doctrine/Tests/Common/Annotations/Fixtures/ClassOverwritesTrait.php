<?php

namespace _PhpScoperfb2c402b972b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfb2c402b972b\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperfb2c402b972b\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
