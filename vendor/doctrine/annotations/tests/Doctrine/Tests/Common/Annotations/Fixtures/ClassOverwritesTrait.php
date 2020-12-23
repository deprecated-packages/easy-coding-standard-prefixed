<?php

namespace _PhpScoperd9fcac9e904f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd9fcac9e904f\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperd9fcac9e904f\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
