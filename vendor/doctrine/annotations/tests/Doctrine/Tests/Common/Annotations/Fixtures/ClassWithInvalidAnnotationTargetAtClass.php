<?php

namespace _PhpScoper069ebd53a518\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper069ebd53a518\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
