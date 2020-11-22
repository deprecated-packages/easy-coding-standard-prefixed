<?php

namespace _PhpScoper797695bcfb1f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper797695bcfb1f\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
