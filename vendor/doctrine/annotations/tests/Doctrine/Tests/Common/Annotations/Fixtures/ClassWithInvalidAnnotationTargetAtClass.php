<?php

namespace _PhpScoperfab1bfb7ec99\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfab1bfb7ec99\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
