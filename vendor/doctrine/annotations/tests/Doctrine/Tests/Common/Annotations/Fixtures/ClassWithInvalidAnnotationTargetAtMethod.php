<?php

namespace _PhpScoperaad82bb90a86\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperaad82bb90a86\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
