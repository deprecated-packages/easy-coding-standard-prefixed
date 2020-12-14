<?php

namespace _PhpScoper8a0112f19f39\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8a0112f19f39\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
