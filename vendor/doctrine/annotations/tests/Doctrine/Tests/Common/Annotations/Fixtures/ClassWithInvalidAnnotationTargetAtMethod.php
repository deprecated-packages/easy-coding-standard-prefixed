<?php

namespace _PhpScoper66292c14b658\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper66292c14b658\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
