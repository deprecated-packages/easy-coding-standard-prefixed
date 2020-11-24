<?php

namespace _PhpScoperf3d5f0921050\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf3d5f0921050\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
