<?php

namespace _PhpScopera51a90153f58\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera51a90153f58\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
