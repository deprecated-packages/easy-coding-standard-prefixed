<?php

namespace _PhpScopere205696a9dd6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere205696a9dd6\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
