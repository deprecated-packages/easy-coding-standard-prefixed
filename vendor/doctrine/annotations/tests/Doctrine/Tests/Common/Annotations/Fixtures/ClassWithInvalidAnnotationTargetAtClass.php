<?php

namespace _PhpScoper3e8786a75afe\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3e8786a75afe\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
