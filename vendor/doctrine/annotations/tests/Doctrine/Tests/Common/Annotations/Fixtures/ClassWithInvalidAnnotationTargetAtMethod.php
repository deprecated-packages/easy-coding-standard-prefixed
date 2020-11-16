<?php

namespace _PhpScoper8e2d8a2760d1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8e2d8a2760d1\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
