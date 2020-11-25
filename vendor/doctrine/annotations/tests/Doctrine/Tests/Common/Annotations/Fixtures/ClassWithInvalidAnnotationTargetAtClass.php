<?php

namespace _PhpScoper13133e188f67\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper13133e188f67\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
