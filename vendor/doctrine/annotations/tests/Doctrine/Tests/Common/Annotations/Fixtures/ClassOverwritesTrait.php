<?php

namespace _PhpScopera1a51450b61d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera1a51450b61d\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScopera1a51450b61d\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
