<?php

namespace _PhpScoper3e7ab659bd82\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3e7ab659bd82\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
