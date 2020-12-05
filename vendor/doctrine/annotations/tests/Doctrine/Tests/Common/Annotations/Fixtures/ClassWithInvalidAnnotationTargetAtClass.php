<?php

namespace _PhpScoper87c77ad5700d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper87c77ad5700d\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
