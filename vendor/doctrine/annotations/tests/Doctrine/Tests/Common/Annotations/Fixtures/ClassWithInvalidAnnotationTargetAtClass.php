<?php

namespace _PhpScoper229e8121cf9f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper229e8121cf9f\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
