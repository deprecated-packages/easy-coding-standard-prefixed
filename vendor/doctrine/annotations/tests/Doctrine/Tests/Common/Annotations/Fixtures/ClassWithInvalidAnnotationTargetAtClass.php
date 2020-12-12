<?php

namespace _PhpScoper79449c4e744b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper79449c4e744b\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
