<?php

namespace _PhpScoper629192f0909b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper629192f0909b\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
