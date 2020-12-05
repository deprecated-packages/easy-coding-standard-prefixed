<?php

namespace _PhpScoperbaf90856897c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperbaf90856897c\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
