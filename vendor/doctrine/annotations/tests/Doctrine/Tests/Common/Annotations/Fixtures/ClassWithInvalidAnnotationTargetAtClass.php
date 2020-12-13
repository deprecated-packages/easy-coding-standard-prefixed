<?php

namespace _PhpScoper4298f97f3cb3\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4298f97f3cb3\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
