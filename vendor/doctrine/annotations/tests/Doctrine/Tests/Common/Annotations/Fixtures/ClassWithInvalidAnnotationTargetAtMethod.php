<?php

namespace _PhpScoper2f75f00bf6fa\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2f75f00bf6fa\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
