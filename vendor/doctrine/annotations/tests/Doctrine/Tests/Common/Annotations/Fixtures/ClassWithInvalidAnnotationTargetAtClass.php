<?php

namespace _PhpScoper38a7d00685f8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper38a7d00685f8\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
