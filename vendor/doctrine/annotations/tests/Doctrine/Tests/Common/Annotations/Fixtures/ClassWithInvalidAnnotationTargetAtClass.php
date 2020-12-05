<?php

namespace _PhpScoperc83f84c90b60\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc83f84c90b60\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
