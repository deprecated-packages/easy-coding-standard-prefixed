<?php

namespace _PhpScoper190659c42b56\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper190659c42b56\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
