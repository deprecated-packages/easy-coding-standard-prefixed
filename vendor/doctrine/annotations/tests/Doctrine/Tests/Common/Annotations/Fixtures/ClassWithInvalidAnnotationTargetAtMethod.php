<?php

namespace _PhpScoperdeea1786e972\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdeea1786e972\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
