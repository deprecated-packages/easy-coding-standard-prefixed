<?php

namespace _PhpScoper61bdb485188f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper61bdb485188f\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
