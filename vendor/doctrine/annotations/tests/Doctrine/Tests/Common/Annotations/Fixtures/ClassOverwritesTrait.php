<?php

namespace _PhpScoper5384d7276e1f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5384d7276e1f\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper5384d7276e1f\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
