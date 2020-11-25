<?php

namespace _PhpScoper833c56a97273\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper833c56a97273\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
