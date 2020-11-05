<?php

namespace _PhpScoperdebd9d705540\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdebd9d705540\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
