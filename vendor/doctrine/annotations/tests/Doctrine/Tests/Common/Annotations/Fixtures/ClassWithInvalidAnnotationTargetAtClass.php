<?php

namespace _PhpScoperfcf15c26e033\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfcf15c26e033\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
