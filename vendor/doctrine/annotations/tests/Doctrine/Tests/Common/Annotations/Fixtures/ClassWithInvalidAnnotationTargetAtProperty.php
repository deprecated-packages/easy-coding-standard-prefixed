<?php

namespace _PhpScopercda2b863d098\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercda2b863d098\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
use _PhpScopercda2b863d098\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
