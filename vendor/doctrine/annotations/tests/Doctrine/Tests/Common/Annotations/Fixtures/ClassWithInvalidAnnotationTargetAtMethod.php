<?php

namespace _PhpScoperfab1bfb7ec99\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfab1bfb7ec99\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
