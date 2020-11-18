<?php

namespace _PhpScoperf77bffce0320\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf77bffce0320\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
