<?php

namespace _PhpScopere015d8a3273c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere015d8a3273c\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScopere015d8a3273c\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
