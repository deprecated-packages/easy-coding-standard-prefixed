<?php

namespace _PhpScoper70072c07b02b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper70072c07b02b\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
