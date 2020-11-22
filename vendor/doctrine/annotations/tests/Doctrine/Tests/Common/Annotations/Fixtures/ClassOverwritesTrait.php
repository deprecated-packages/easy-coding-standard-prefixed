<?php

namespace _PhpScoperbc5235eb86f3\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperbc5235eb86f3\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperbc5235eb86f3\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
