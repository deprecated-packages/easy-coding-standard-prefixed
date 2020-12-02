<?php

namespace _PhpScopera34ae19e8d40\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera34ae19e8d40\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
