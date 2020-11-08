<?php

namespace _PhpScoperd79d87c3336e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd79d87c3336e\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperd79d87c3336e\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
