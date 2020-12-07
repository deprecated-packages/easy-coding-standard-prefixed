<?php

namespace _PhpScoperb83706991c7f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb83706991c7f\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
