<?php

namespace _PhpScoperae959d396e95\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperae959d396e95\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
