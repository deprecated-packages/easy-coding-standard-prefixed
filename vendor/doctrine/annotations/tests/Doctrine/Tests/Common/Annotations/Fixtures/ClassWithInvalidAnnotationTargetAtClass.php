<?php

namespace _PhpScoper66292c14b658\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper66292c14b658\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
