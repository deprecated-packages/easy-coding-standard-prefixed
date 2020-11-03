<?php

namespace _PhpScoper7f41430b5328\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7f41430b5328\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
