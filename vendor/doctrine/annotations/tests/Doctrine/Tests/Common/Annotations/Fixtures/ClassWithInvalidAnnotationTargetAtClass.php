<?php

namespace _PhpScoperca8ca183ac38\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperca8ca183ac38\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
