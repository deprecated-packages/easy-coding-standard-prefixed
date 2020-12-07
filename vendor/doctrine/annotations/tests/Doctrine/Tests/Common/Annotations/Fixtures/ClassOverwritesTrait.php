<?php

namespace _PhpScoperb73f9e44f4eb\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb73f9e44f4eb\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperb73f9e44f4eb\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
