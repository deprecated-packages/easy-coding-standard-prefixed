<?php

namespace _PhpScoper7b8580219c59\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7b8580219c59\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
