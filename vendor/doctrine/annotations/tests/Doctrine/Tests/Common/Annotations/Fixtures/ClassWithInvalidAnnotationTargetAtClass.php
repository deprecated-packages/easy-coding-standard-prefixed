<?php

namespace _PhpScoper8dd2e1c340b1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8dd2e1c340b1\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
