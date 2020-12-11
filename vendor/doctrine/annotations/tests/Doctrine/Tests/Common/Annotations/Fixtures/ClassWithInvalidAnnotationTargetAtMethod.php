<?php

namespace _PhpScopera061b8a47e36\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera061b8a47e36\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
