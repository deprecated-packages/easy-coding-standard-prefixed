<?php

namespace _PhpScopereb8678af2407\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopereb8678af2407\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScopereb8678af2407\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
