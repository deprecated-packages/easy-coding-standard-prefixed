<?php

namespace _PhpScoper57272265e1c9\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper57272265e1c9\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
