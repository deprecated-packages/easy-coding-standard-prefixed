<?php

namespace _PhpScoperfaaf57618f34\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfaaf57618f34\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
