<?php

namespace _PhpScoper2637e9a72c68\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2637e9a72c68\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
