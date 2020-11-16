<?php

namespace _PhpScoperedc2e0c967db\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperedc2e0c967db\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
