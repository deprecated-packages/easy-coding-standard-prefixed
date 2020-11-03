<?php

namespace _PhpScoper4848279dba07\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4848279dba07\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
