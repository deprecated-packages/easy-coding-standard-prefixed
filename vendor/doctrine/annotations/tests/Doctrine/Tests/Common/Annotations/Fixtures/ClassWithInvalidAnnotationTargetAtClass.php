<?php

namespace _PhpScoperc5bee3a837bb\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc5bee3a837bb\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
