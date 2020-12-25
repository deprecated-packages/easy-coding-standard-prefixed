<?php

namespace _PhpScoper745103eaabcd\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper745103eaabcd\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
