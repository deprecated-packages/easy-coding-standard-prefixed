<?php

namespace _PhpScoper614deab2c612\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper614deab2c612\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
