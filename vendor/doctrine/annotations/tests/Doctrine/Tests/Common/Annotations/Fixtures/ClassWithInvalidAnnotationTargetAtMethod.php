<?php

namespace _PhpScoperad4605bb9267\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperad4605bb9267\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
