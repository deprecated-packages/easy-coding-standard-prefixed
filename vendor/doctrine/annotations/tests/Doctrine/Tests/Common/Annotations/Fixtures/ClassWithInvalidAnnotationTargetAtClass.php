<?php

namespace _PhpScopere015d8a3273c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere015d8a3273c\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
