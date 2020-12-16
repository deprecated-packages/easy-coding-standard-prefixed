<?php

namespace _PhpScoperc75fd40d7a6e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc75fd40d7a6e\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperc75fd40d7a6e\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
