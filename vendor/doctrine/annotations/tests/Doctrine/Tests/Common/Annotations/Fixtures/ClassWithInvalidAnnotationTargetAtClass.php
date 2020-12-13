<?php

namespace _PhpScoperd3d57724c802\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd3d57724c802\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
