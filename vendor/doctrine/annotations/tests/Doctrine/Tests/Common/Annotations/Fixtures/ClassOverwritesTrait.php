<?php

namespace _PhpScoperf7b66f9e3817\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf7b66f9e3817\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperf7b66f9e3817\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
