<?php

namespace _PhpScoper3d04c8135695\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3d04c8135695\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
