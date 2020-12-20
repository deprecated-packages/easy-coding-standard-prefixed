<?php

namespace _PhpScopera51a90153f58\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera51a90153f58\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScopera51a90153f58\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
