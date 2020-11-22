<?php

namespace _PhpScoper4cd05b62e9f1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4cd05b62e9f1\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
