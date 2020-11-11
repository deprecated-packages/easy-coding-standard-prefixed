<?php

namespace _PhpScoper0f5cd390c37a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper0f5cd390c37a\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
