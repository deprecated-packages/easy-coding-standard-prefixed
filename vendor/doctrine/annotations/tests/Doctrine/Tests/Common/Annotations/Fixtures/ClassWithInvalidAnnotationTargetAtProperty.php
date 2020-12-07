<?php

namespace _PhpScopereb8678af2407\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopereb8678af2407\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
use _PhpScopereb8678af2407\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
