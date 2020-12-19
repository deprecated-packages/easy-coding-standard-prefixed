<?php

namespace _PhpScoperfb2c402b972b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfb2c402b972b\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
