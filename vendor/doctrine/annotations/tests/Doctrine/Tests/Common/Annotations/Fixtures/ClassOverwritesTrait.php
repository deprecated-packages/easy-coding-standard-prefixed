<?php

namespace _PhpScoper59558822d8c7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper59558822d8c7\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper59558822d8c7\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
