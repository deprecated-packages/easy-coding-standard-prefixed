<?php

namespace _PhpScoper3ba93baeac18\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3ba93baeac18\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
