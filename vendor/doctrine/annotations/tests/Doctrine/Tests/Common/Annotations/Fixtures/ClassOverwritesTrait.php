<?php

namespace _PhpScoperfacc742d2745\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfacc742d2745\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperfacc742d2745\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
