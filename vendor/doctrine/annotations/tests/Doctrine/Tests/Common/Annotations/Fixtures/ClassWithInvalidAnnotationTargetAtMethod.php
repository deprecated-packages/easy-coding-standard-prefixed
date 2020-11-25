<?php

namespace _PhpScoper544eb478a6f6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper544eb478a6f6\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
