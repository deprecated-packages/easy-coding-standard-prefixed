<?php

namespace _PhpScoper992f4af8b9e0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper992f4af8b9e0\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
