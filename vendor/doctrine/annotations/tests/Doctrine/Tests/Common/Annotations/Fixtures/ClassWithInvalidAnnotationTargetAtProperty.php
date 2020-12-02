<?php

namespace _PhpScoper992f4af8b9e0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper992f4af8b9e0\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
use _PhpScoper992f4af8b9e0\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
