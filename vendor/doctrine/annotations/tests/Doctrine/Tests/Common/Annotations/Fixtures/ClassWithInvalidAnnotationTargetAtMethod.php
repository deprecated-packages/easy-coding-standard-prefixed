<?php

namespace _PhpScoper64a921a5401b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper64a921a5401b\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
