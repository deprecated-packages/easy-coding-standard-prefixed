<?php

namespace _PhpScoperef870243cfdb\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperef870243cfdb\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperef870243cfdb\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
