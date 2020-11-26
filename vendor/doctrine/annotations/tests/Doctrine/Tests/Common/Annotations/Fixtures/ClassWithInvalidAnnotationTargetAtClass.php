<?php

namespace _PhpScoper4a718ec9156e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4a718ec9156e\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
