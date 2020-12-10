<?php

namespace _PhpScopera40fc53e636b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera40fc53e636b\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScopera40fc53e636b\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
