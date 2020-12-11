<?php

namespace _PhpScoper23ef26a4fb01\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper23ef26a4fb01\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
