<?php

namespace _PhpScoperba24099fc6fd\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperba24099fc6fd\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
