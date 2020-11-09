<?php

namespace _PhpScoper880bfa4d8b51\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper880bfa4d8b51\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
