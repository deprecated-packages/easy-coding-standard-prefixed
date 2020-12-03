<?php

namespace _PhpScoper6c2f17c43d2d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6c2f17c43d2d\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
