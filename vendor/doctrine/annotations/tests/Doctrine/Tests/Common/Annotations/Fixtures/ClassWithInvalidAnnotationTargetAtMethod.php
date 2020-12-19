<?php

namespace _PhpScoper13160cf3462c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper13160cf3462c\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
