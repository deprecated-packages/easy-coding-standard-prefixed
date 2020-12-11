<?php

namespace _PhpScoper1e80a2e03314\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper1e80a2e03314\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
