<?php

namespace _PhpScoper04022cd986ec\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper04022cd986ec\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
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
