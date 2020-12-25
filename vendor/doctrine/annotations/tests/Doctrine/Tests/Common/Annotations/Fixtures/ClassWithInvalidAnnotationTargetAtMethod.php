<?php

namespace _PhpScoper9e3283ae8193\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9e3283ae8193\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
