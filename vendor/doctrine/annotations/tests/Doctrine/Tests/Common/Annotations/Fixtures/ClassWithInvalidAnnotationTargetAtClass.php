<?php

namespace _PhpScoper133be48300f9\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper133be48300f9\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
