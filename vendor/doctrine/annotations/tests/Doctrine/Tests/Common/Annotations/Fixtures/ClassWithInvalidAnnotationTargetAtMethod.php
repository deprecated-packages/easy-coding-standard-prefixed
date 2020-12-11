<?php

namespace _PhpScoper1e80a2e03314\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper1e80a2e03314\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
