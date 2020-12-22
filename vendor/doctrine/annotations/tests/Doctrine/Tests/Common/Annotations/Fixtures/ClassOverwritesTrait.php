<?php

namespace _PhpScoper5813f9b171f8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5813f9b171f8\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper5813f9b171f8\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
