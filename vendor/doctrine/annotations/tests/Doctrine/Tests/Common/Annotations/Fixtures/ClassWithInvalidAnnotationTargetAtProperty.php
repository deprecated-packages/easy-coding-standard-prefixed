<?php

namespace _PhpScoperc64a4ac1af35\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc64a4ac1af35\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
use _PhpScoperc64a4ac1af35\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
