<?php

namespace _PhpScopera4fc793dae73\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera4fc793dae73\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
