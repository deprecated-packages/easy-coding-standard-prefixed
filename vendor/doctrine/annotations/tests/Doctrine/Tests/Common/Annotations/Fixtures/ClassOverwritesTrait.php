<?php

namespace _PhpScopercb576ca159b5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercb576ca159b5\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScopercb576ca159b5\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
