<?php

namespace _PhpScoperfa521053d812\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfa521053d812\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
