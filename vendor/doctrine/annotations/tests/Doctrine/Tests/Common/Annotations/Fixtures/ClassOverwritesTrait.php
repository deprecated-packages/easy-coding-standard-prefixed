<?php

namespace _PhpScoper4a718ec9156e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4a718ec9156e\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper4a718ec9156e\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
