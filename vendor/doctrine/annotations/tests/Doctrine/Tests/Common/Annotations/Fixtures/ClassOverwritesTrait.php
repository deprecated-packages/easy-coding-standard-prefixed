<?php

namespace _PhpScoper7cef7256eba6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7cef7256eba6\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper7cef7256eba6\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
