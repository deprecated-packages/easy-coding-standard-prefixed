<?php

namespace _PhpScoper47644ab3aa9a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper47644ab3aa9a\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
