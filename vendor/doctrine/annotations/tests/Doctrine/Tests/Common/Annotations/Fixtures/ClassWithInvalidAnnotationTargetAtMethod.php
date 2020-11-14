<?php

namespace _PhpScoperddde3ba4aebc\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperddde3ba4aebc\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
