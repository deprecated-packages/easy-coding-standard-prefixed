<?php

namespace _PhpScoper967d20dce97a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper967d20dce97a\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
