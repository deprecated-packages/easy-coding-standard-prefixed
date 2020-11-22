<?php

namespace _PhpScoper3fa05b4669af\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3fa05b4669af\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
