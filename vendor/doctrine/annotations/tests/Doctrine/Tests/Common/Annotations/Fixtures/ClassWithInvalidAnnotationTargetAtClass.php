<?php

namespace _PhpScoperac4e86be08e5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperac4e86be08e5\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
