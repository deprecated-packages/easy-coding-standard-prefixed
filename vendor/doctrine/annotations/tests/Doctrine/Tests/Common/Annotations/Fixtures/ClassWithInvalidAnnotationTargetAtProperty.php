<?php

namespace _PhpScopera34ae19e8d40\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera34ae19e8d40\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
use _PhpScopera34ae19e8d40\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
/**
 * @AnnotationTargetClass("Some data")
 */
class ClassWithInvalidAnnotationTargetAtProperty
{
    /**
     * @AnnotationTargetClass("Bar")
     */
    public $foo;
    /**
     * @AnnotationTargetAnnotation("Foo")
     */
    public $bar;
}
