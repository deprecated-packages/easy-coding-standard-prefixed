<?php

namespace _PhpScoper4936962185e7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4936962185e7\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
