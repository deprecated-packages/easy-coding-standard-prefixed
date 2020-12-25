<?php

namespace _PhpScoperb44a315fec16\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb44a315fec16\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperb44a315fec16\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
