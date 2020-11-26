<?php

namespace _PhpScopercb217fd4e736\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercb217fd4e736\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
use _PhpScopercb217fd4e736\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
