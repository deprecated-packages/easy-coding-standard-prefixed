<?php

namespace _PhpScoper4936962185e7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4936962185e7\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
