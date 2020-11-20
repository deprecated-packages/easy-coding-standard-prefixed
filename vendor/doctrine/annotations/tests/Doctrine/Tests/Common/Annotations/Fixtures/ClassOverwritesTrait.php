<?php

namespace _PhpScoperb6d4bd368bd9\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb6d4bd368bd9\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperb6d4bd368bd9\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
