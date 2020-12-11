<?php

namespace _PhpScopera061b8a47e36\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera061b8a47e36\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
