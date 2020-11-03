<?php

namespace _PhpScoper2b44cb0c30af\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2b44cb0c30af\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
