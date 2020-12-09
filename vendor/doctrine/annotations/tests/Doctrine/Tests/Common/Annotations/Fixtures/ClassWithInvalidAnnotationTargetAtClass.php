<?php

namespace _PhpScoperdf15f2b748e9\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdf15f2b748e9\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
