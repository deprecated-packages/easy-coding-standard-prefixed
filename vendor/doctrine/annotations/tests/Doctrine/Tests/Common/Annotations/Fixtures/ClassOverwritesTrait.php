<?php

namespace _PhpScoperf62d28230928\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf62d28230928\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperf62d28230928\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
