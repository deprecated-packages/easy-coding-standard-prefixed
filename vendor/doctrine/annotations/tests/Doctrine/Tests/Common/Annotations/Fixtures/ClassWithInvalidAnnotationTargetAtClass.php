<?php

namespace _PhpScoper5cb8aea05893\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5cb8aea05893\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
