<?php

namespace _PhpScoperb2e2c0c42e71\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb2e2c0c42e71\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
