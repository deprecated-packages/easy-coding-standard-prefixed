<?php

namespace _PhpScoper59558822d8c7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper59558822d8c7\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
