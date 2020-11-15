<?php

namespace _PhpScopera189153e1f79\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera189153e1f79\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScopera189153e1f79\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
