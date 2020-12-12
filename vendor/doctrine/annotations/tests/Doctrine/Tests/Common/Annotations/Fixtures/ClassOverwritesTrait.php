<?php

namespace _PhpScoperbd5c5a045153\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperbd5c5a045153\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperbd5c5a045153\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
