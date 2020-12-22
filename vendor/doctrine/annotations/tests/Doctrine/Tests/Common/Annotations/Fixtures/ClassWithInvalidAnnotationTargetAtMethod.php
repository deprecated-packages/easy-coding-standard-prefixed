<?php

namespace _PhpScoper68a3a2539032\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper68a3a2539032\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
