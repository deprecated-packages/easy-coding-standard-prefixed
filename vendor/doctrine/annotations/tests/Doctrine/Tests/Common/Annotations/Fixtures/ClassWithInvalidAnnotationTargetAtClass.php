<?php

namespace _PhpScoper02b5d1bf8fec\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper02b5d1bf8fec\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
