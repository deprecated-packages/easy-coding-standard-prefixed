<?php

namespace _PhpScoperfa7254c25e18\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfa7254c25e18\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
