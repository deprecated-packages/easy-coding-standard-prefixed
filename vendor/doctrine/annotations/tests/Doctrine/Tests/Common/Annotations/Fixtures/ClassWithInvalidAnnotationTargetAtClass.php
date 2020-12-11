<?php

namespace _PhpScoper23ef26a4fb01\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper23ef26a4fb01\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
