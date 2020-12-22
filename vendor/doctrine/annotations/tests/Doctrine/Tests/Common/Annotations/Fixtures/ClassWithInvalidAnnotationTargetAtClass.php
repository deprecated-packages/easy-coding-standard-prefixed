<?php

namespace _PhpScoper68a3a2539032\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper68a3a2539032\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
