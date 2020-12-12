<?php

namespace _PhpScoperbd5c5a045153\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperbd5c5a045153\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
