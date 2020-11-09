<?php

namespace _PhpScoperf5f75c22067b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf5f75c22067b\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
