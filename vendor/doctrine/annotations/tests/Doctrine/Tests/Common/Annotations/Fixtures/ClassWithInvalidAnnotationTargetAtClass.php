<?php

namespace _PhpScoper9e3283ae8193\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9e3283ae8193\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
