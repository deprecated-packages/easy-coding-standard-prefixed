<?php

namespace _PhpScoperedc2e0c967db\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperedc2e0c967db\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
