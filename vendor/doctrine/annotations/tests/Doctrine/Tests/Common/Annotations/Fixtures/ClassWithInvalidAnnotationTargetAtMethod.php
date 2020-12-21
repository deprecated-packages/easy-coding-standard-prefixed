<?php

namespace _PhpScoperb730595bc9f4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb730595bc9f4\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
