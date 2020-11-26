<?php

namespace _PhpScopercb217fd4e736\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercb217fd4e736\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
