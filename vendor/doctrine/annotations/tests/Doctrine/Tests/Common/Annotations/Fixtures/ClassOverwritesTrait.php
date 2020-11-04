<?php

namespace _PhpScoperb383f16e851e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb383f16e851e\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperb383f16e851e\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
