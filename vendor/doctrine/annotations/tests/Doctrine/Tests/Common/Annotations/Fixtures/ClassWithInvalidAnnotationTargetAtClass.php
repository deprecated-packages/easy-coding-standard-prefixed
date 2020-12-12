<?php

namespace _PhpScoper326bba7310a2\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper326bba7310a2\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
