<?php

namespace _PhpScoper6224e3b16fcc\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6224e3b16fcc\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
