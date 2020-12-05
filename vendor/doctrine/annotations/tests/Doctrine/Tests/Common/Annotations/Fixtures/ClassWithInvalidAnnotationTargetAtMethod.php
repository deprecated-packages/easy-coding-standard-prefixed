<?php

namespace _PhpScoper59ccd3f8e121\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper59ccd3f8e121\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
