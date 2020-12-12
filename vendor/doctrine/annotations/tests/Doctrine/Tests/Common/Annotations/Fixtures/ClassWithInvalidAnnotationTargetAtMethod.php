<?php

namespace _PhpScoper83b3b9a317c0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper83b3b9a317c0\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
