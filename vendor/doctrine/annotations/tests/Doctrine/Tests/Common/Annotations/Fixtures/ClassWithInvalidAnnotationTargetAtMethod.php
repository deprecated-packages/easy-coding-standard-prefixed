<?php

namespace _PhpScopera4be459e5e3d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera4be459e5e3d\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
