<?php

namespace _PhpScoper544eb478a6f6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper544eb478a6f6\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
/**
 * @AnnotationTargetPropertyMethod("Some data")
 */
class ClassWithInvalidAnnotationTargetAtClass
{
    /**
     * @AnnotationTargetPropertyMethod("Bar")
     */
    public $foo;
}
