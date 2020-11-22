<?php

namespace _PhpScoper21fff473f90a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper21fff473f90a\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
