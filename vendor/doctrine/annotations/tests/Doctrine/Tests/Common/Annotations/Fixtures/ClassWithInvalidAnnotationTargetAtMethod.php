<?php

namespace _PhpScoperbd5fb781fe24\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperbd5fb781fe24\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
