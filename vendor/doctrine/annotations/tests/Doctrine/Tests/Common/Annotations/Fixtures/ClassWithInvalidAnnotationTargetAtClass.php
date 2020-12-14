<?php

namespace _PhpScoperc64a4ac1af35\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc64a4ac1af35\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
