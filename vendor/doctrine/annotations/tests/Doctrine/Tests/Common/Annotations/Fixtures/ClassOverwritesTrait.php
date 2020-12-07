<?php

namespace _PhpScoper89ec3c69e67d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper89ec3c69e67d\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper89ec3c69e67d\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
