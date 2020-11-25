<?php

namespace _PhpScoperd301db66c80c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd301db66c80c\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperd301db66c80c\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
