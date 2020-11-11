<?php

namespace _PhpScoper2fe14d6302bc\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2fe14d6302bc\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper2fe14d6302bc\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
