<?php

namespace _PhpScoper49c742f5a4ee\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper49c742f5a4ee\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper49c742f5a4ee\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
