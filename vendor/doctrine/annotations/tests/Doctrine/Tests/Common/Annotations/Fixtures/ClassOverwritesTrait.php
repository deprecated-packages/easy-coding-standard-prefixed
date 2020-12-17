<?php

namespace _PhpScoperfa7254c25e18\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfa7254c25e18\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperfa7254c25e18\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
