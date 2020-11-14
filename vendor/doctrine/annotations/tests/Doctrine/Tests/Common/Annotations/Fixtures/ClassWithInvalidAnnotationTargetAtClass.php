<?php

namespace _PhpScopercda2b863d098\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercda2b863d098\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
