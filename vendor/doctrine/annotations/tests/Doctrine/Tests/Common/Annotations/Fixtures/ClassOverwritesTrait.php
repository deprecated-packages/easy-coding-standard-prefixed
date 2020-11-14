<?php

namespace _PhpScoperddde3ba4aebc\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperddde3ba4aebc\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperddde3ba4aebc\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
