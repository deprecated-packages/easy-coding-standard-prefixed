<?php

namespace _PhpScopere4fa57261c04\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere4fa57261c04\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
