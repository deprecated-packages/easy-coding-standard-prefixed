<?php

namespace _PhpScoperc7c7dddc9238\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc7c7dddc9238\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperc7c7dddc9238\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
