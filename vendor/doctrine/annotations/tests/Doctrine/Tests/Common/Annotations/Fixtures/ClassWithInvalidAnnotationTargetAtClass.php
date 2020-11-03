<?php

namespace _PhpScoper3d04c8135695\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3d04c8135695\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
