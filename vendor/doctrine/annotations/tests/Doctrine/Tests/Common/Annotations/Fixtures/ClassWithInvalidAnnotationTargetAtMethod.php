<?php

namespace _PhpScopercb217fd4e736\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercb217fd4e736\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
