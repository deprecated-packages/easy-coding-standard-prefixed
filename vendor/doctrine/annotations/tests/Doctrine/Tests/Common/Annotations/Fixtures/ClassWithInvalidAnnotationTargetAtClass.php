<?php

namespace _PhpScoperab9510cd5d97\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperab9510cd5d97\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
