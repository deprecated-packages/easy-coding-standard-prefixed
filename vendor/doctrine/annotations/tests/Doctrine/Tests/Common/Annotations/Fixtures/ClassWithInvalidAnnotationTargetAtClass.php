<?php

namespace _PhpScoperb6d4bd368bd9\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb6d4bd368bd9\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
