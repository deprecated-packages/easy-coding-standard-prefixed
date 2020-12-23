<?php

namespace _PhpScoper14cb6de5473d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper14cb6de5473d\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
