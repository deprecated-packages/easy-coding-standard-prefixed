<?php

namespace _PhpScopere205696a9dd6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere205696a9dd6\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScopere205696a9dd6\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
