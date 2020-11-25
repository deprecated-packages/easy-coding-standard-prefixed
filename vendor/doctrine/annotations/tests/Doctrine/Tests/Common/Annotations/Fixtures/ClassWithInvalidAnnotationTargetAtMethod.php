<?php

namespace _PhpScoper7312d63d356f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7312d63d356f\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
