<?php

namespace _PhpScoper7cef7256eba6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7cef7256eba6\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
