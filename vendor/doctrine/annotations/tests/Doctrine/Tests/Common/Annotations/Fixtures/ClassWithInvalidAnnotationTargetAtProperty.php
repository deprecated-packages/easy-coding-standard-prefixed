<?php

namespace _PhpScopere106f9fd4493\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere106f9fd4493\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
use _PhpScopere106f9fd4493\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
