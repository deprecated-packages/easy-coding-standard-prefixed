<?php

namespace _PhpScopera04bf8e97c06\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera04bf8e97c06\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
