<?php

namespace _PhpScoperfcce67077a55\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfcce67077a55\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
