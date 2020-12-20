<?php

namespace _PhpScopere205696a9dd6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere205696a9dd6\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
use _PhpScopere205696a9dd6\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
