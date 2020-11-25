<?php

namespace _PhpScoper13133e188f67\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper13133e188f67\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper13133e188f67\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
