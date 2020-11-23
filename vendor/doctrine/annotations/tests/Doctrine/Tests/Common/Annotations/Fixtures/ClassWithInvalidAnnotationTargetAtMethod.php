<?php

namespace _PhpScoperc4b135661b3a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc4b135661b3a\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
