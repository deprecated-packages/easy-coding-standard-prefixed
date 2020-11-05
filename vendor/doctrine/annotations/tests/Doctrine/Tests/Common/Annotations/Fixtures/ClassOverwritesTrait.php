<?php

namespace _PhpScoper39d23eef9a06\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper39d23eef9a06\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper39d23eef9a06\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
