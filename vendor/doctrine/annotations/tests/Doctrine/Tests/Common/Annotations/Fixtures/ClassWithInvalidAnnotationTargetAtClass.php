<?php

namespace _PhpScopera88a8b9f064a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera88a8b9f064a\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
