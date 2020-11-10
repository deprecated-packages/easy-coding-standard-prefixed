<?php

namespace _PhpScoper0c236037eb04\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper0c236037eb04\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
