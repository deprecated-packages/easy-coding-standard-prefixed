<?php

namespace _PhpScoper7c0f822a05e1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7c0f822a05e1\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
