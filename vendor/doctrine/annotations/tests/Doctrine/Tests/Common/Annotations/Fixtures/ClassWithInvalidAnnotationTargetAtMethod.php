<?php

namespace _PhpScoper5cb8aea05893\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5cb8aea05893\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
