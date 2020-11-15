<?php

namespace _PhpScoper21763e6c7ac4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper21763e6c7ac4\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
