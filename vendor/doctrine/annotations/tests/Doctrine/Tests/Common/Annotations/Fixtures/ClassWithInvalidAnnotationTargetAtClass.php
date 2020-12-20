<?php

namespace _PhpScoper32136251d417\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper32136251d417\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
