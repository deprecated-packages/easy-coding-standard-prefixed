<?php

namespace _PhpScoper239b374a39c8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper239b374a39c8\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
