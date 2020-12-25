<?php

namespace _PhpScoper15c5423f4731\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper15c5423f4731\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
