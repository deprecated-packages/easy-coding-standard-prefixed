<?php

namespace _PhpScoper08748c77fa1c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper08748c77fa1c\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
