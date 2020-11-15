<?php

namespace _PhpScoper49c742f5a4ee\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper49c742f5a4ee\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
