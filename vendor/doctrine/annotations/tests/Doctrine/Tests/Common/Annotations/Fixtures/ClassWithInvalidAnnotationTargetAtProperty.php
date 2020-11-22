<?php

namespace _PhpScoper4cd05b62e9f1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4cd05b62e9f1\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
use _PhpScoper4cd05b62e9f1\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
