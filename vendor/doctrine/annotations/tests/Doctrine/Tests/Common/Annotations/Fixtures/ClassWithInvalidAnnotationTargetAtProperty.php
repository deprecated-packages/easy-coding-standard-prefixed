<?php

namespace _PhpScoperc7c7dddc9238\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc7c7dddc9238\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
use _PhpScoperc7c7dddc9238\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
