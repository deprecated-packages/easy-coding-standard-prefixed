<?php

namespace _PhpScoper80dbed43490f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper80dbed43490f\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
