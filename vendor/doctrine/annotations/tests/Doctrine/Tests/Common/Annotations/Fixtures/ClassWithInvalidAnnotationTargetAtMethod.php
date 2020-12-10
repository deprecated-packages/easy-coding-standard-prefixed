<?php

namespace _PhpScoper4edd80b4ab80\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4edd80b4ab80\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
