<?php

namespace _PhpScoper578a67c80b2b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper578a67c80b2b\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper578a67c80b2b\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
