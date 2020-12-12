<?php

namespace _PhpScoper3e7ab659bd82\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3e7ab659bd82\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper3e7ab659bd82\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
