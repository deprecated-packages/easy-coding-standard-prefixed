<?php

namespace _PhpScoperfaaf57618f34\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfaaf57618f34\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperfaaf57618f34\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
