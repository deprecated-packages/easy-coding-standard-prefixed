<?php

namespace _PhpScoperb6a8e65b492c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb6a8e65b492c\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
