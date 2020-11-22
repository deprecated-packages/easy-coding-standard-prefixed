<?php

namespace _PhpScoper797695bcfb1f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper797695bcfb1f\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
