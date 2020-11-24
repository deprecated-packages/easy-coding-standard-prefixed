<?php

namespace _PhpScoperd675aaf00c76\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd675aaf00c76\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
