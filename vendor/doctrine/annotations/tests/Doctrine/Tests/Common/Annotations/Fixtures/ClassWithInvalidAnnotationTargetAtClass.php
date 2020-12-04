<?php

namespace _PhpScoperc233426b15e0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc233426b15e0\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
