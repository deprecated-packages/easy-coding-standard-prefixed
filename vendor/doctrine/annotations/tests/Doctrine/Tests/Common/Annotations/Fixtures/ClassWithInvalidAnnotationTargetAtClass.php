<?php

namespace _PhpScopera40fc53e636b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera40fc53e636b\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
