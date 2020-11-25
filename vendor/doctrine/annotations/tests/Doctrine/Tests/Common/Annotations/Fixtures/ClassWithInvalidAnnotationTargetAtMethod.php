<?php

namespace _PhpScoper2a48669dad72\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2a48669dad72\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
