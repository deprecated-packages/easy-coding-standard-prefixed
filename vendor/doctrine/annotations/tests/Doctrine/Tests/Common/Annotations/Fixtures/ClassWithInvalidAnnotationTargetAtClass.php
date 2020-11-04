<?php

namespace _PhpScoper7145e5e87de5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7145e5e87de5\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
/**
 * @AnnotationTargetPropertyMethod("Some data")
 */
class ClassWithInvalidAnnotationTargetAtClass
{
    /**
     * @AnnotationTargetPropertyMethod("Bar")
     */
    public $foo;
}
