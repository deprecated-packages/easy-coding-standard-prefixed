<?php

namespace _PhpScoper967d20dce97a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper967d20dce97a\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper967d20dce97a\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
