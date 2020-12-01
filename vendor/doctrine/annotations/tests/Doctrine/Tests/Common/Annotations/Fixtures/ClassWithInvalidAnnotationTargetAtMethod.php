<?php

namespace _PhpScoper96382aaac118\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper96382aaac118\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
