<?php

namespace _PhpScopera37d6fb0b1ab\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera37d6fb0b1ab\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScopera37d6fb0b1ab\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
