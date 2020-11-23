<?php

namespace _PhpScoperc4b135661b3a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc4b135661b3a\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
