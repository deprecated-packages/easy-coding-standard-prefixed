<?php

namespace _PhpScoper31ba553edf97\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper31ba553edf97\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper31ba553edf97\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
