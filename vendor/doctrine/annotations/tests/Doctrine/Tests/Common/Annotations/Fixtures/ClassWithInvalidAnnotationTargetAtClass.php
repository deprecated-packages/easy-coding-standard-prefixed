<?php

namespace _PhpScoperdf6a0b341030\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdf6a0b341030\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
