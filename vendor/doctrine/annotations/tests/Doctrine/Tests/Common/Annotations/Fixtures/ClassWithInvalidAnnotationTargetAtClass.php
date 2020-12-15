<?php

namespace _PhpScoper80dbed43490f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper80dbed43490f\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
