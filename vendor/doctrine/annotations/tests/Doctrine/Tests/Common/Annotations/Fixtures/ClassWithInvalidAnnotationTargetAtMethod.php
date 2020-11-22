<?php

namespace _PhpScopera88a8b9f064a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera88a8b9f064a\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
