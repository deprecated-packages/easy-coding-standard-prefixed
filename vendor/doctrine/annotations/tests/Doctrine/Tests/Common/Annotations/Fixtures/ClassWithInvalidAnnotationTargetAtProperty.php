<?php

namespace _PhpScopera37d6fb0b1ab\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera37d6fb0b1ab\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
use _PhpScopera37d6fb0b1ab\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
