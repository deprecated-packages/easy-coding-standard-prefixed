<?php

namespace _PhpScoperd9fcac9e904f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd9fcac9e904f\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
