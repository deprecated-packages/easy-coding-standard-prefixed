<?php

namespace _PhpScoper6a0a7eb6e565\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6a0a7eb6e565\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
