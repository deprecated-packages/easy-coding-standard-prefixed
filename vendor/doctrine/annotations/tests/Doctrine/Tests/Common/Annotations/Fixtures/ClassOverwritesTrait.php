<?php

namespace _PhpScoperbcc0395698f8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperbcc0395698f8\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperbcc0395698f8\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
