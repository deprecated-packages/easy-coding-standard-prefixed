<?php

namespace _PhpScoper2b44cb0c30af\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2b44cb0c30af\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
use _PhpScoper2b44cb0c30af\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
