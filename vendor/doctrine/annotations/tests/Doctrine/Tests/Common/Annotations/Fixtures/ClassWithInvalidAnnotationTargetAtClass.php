<?php

namespace _PhpScoper15c5423f4731\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper15c5423f4731\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
