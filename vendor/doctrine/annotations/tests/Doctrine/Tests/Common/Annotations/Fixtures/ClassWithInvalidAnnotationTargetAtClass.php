<?php

namespace _PhpScoper58a0a169dcfb\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper58a0a169dcfb\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
