<?php

namespace _PhpScopera23ebff5477f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera23ebff5477f\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
/**
 * @AnnotationTargetClass("Some data")
 */
class ClassWithInvalidAnnotationTargetAtMethod
{
    /**
     * @AnnotationTargetClass("functionName")
     */
    public function functionName($param)
    {
    }
}
