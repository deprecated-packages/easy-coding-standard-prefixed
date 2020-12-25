<?php

namespace _PhpScoper15c5423f4731\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper15c5423f4731\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper15c5423f4731\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
