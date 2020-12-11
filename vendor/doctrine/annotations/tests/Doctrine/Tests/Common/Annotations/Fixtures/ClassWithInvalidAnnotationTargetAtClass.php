<?php

namespace _PhpScoperea337ed74749\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperea337ed74749\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
