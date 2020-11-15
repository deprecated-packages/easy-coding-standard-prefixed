<?php

namespace _PhpScoper279cf54b77ad\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper279cf54b77ad\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
