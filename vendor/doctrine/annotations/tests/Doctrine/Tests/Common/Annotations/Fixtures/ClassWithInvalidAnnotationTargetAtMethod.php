<?php

namespace _PhpScoper63567e560066\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper63567e560066\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
