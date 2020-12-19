<?php

namespace _PhpScoperd1a5bf00e83e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd1a5bf00e83e\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
