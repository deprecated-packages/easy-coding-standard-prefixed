<?php

namespace _PhpScoper207eb8f99af3\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper207eb8f99af3\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper207eb8f99af3\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
