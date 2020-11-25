<?php

namespace _PhpScoper544eb478a6f6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper544eb478a6f6\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper544eb478a6f6\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
