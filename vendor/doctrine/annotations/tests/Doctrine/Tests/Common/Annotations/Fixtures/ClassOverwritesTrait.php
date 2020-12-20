<?php

namespace _PhpScoper7574e8786845\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7574e8786845\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper7574e8786845\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
