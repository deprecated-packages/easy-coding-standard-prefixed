<?php

namespace _PhpScoper9613f3fac51d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9613f3fac51d\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
