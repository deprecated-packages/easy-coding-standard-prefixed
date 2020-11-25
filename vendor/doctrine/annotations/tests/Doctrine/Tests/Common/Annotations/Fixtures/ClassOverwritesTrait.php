<?php

namespace _PhpScoper38a7d00685f8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper38a7d00685f8\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper38a7d00685f8\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
