<?php

namespace _PhpScoper326bba7310a2\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper326bba7310a2\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
