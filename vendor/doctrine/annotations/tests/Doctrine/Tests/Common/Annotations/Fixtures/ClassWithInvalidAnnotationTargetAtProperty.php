<?php

namespace _PhpScopera4fc793dae73\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera4fc793dae73\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
use _PhpScopera4fc793dae73\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
