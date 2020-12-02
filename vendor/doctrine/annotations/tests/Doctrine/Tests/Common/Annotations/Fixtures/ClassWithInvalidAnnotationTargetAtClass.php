<?php

namespace _PhpScopera23ebff5477f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera23ebff5477f\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
