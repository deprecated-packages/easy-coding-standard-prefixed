<?php

namespace _PhpScopera23ebff5477f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera23ebff5477f\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScopera23ebff5477f\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
