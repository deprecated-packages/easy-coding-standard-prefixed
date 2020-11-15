<?php

namespace _PhpScopera189153e1f79\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera189153e1f79\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
