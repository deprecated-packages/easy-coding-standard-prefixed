<?php

namespace _PhpScoper8751341571b5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8751341571b5\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
