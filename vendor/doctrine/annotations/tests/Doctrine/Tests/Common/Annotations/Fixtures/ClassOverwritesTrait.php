<?php

namespace _PhpScoperad4605bb9267\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperad4605bb9267\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperad4605bb9267\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
