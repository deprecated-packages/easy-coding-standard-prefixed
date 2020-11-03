<?php

namespace _PhpScoperaad82bb90a86\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperaad82bb90a86\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperaad82bb90a86\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
