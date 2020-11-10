<?php

namespace _PhpScoper666af036e800\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper666af036e800\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
