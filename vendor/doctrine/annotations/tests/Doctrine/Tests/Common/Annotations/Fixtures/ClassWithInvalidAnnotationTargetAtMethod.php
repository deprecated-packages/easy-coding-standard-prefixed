<?php

namespace _PhpScoperf3f1be0d8a30\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf3f1be0d8a30\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
