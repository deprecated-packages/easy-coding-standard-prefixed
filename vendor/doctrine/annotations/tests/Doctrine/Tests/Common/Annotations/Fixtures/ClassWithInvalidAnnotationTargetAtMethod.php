<?php

namespace _PhpScoper167729fa1dde\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper167729fa1dde\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
