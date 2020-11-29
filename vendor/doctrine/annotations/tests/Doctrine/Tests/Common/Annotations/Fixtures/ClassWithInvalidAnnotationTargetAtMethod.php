<?php

namespace _PhpScoper9d73a84b09ad\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9d73a84b09ad\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
