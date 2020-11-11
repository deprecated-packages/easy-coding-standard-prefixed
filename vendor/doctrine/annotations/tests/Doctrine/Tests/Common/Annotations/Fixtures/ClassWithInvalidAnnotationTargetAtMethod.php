<?php

namespace _PhpScoper2fe14d6302bc\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2fe14d6302bc\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
