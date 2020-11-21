<?php

namespace _PhpScoper3639953bb9e5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3639953bb9e5\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
