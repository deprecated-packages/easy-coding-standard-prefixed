<?php

namespace _PhpScoper269dc521b0fa\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper269dc521b0fa\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
