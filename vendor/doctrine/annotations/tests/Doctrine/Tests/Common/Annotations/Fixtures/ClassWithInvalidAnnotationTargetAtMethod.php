<?php

namespace _PhpScoperf3db63c305b2\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf3db63c305b2\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
