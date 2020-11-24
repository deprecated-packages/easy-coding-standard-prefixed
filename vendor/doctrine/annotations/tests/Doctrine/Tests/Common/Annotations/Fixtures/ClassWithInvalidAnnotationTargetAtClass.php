<?php

namespace _PhpScoper528afa732cbd\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper528afa732cbd\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
