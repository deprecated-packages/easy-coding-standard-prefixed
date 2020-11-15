<?php

namespace _PhpScoper70072c07b02b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper70072c07b02b\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper70072c07b02b\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
