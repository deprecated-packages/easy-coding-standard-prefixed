<?php

namespace _PhpScoper7145e5e87de5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7145e5e87de5\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
