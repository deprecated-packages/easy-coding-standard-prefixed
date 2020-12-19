<?php

namespace _PhpScoper9f8d5dcff860\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9f8d5dcff860\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
