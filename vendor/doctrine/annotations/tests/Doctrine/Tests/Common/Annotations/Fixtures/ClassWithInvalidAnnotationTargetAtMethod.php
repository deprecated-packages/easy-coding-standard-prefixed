<?php

namespace _PhpScopercf327c47dfc5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercf327c47dfc5\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
