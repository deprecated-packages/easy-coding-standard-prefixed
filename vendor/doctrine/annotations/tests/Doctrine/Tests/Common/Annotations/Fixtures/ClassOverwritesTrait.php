<?php

namespace _PhpScoper21fff473f90a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper21fff473f90a\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper21fff473f90a\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
