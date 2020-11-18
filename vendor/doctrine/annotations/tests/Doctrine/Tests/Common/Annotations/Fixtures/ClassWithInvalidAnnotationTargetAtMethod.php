<?php

namespace _PhpScoperf77bffce0320\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf77bffce0320\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
