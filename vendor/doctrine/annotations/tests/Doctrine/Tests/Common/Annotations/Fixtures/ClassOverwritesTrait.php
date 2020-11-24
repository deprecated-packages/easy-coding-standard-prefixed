<?php

namespace _PhpScoperfd70a7e8e84f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfd70a7e8e84f\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperfd70a7e8e84f\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
