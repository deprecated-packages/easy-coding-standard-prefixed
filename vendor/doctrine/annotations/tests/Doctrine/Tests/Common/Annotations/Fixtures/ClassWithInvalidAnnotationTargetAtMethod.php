<?php

namespace _PhpScoper836bc32aecc2\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper836bc32aecc2\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
