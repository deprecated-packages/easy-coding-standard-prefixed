<?php

namespace _PhpScopercb576ca159b5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercb576ca159b5\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
