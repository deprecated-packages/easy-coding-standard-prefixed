<?php

namespace _PhpScopercae980ebf12d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercae980ebf12d\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScopercae980ebf12d\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
