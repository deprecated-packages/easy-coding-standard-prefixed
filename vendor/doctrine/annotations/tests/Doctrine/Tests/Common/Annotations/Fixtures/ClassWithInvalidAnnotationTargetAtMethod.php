<?php

namespace _PhpScoper3ba93baeac18\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3ba93baeac18\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
