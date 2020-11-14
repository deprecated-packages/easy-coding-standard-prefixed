<?php

namespace _PhpScopera749ac204cd2\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera749ac204cd2\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
