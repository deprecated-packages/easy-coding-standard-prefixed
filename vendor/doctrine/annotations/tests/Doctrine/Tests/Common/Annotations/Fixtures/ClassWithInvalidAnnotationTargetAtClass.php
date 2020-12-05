<?php

namespace _PhpScoper56c9df53a081\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper56c9df53a081\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
