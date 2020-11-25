<?php

namespace _PhpScoper418afc2f157c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper418afc2f157c\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
