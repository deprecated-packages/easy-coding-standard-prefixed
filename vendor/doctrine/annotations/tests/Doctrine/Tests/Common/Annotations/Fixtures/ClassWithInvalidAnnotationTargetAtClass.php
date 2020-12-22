<?php

namespace _PhpScoper5813f9b171f8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5813f9b171f8\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
/**
 * @AnnotationTargetPropertyMethod("Some data")
 */
class ClassWithInvalidAnnotationTargetAtClass
{
    /**
     * @AnnotationTargetPropertyMethod("Bar")
     */
    public $foo;
}
