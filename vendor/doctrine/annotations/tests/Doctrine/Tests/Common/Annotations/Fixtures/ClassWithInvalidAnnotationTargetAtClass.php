<?php

namespace _PhpScoper92feab6bddf8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper92feab6bddf8\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
