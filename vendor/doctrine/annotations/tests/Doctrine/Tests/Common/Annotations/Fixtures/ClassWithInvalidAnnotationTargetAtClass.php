<?php

namespace _PhpScoperd8b12759ee0d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd8b12759ee0d\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
