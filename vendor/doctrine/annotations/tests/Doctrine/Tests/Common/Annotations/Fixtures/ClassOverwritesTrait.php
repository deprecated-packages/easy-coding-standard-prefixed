<?php

namespace _PhpScoperd675aaf00c76\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd675aaf00c76\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperd675aaf00c76\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
