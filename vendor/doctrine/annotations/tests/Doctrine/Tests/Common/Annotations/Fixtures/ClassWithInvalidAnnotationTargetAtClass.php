<?php

namespace _PhpScoperfabf55fef6b7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfabf55fef6b7\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
