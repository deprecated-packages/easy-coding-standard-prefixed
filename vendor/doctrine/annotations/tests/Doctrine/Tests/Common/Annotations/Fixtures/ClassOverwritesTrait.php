<?php

namespace _PhpScoperd1a5bf00e83e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd1a5bf00e83e\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperd1a5bf00e83e\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
