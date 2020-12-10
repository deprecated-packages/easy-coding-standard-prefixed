<?php

namespace _PhpScoper908feaf49cd8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper908feaf49cd8\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
