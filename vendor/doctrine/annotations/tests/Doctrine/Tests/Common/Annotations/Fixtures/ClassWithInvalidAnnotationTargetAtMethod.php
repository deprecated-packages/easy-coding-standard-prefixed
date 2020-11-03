<?php

namespace _PhpScoper4848279dba07\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4848279dba07\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
