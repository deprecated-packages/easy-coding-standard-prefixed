<?php

namespace _PhpScoperbd5c5a045153\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperbd5c5a045153\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
