<?php

namespace _PhpScoper11a6395266c4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper11a6395266c4\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
