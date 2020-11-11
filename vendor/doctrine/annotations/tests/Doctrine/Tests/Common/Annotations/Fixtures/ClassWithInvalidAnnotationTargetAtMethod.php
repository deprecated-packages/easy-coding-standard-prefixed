<?php

namespace _PhpScoper06c66bea2cf6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper06c66bea2cf6\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
