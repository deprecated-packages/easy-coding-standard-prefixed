<?php

namespace _PhpScoper2731c1906fe4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2731c1906fe4\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
