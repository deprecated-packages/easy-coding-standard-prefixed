<?php

namespace _PhpScoper4298f97f3cb3\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4298f97f3cb3\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
use _PhpScoper4298f97f3cb3\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
