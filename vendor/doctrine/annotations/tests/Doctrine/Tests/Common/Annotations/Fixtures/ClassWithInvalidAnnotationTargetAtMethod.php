<?php

namespace _PhpScoper7108c819f5c5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7108c819f5c5\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
