<?php

namespace _PhpScoperc8b83ee8976a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc8b83ee8976a\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
