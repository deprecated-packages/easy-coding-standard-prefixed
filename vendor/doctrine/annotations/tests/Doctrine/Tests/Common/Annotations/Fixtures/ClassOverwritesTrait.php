<?php

namespace _PhpScoperbaf90856897c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperbaf90856897c\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperbaf90856897c\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
