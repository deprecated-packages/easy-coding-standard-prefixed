<?php

namespace _PhpScoper3d6b50c3ca2f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3d6b50c3ca2f\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
