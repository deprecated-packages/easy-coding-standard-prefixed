<?php

namespace _PhpScoper4972b76c81a2\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4972b76c81a2\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
