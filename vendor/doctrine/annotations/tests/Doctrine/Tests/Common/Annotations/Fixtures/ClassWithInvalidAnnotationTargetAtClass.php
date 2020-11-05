<?php

namespace _PhpScoper6ec31b85adcf\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6ec31b85adcf\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
