<?php

namespace _PhpScoper528afa732cbd\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper528afa732cbd\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
