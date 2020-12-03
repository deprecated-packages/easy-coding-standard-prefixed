<?php

namespace _PhpScoper5465fda93cc7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5465fda93cc7\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
