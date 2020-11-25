<?php

namespace _PhpScoperdc8fbcd7c69d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdc8fbcd7c69d\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
