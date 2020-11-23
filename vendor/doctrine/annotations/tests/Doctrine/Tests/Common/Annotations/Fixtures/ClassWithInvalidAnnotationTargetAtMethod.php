<?php

namespace _PhpScoper7b8580219c59\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7b8580219c59\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
