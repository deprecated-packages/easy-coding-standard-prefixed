<?php

namespace _PhpScoper64a921a5401b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper64a921a5401b\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
