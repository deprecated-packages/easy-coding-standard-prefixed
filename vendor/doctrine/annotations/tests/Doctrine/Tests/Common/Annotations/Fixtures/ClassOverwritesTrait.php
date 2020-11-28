<?php

namespace _PhpScoperfcce67077a55\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfcce67077a55\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperfcce67077a55\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
