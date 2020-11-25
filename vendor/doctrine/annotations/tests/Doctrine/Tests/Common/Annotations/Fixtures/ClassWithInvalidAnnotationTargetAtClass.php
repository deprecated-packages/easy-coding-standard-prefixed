<?php

namespace _PhpScoper833c56a97273\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper833c56a97273\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
