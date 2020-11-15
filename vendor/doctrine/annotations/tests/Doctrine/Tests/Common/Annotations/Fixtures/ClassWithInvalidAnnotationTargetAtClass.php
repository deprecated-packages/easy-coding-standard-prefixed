<?php

namespace _PhpScoper279cf54b77ad\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper279cf54b77ad\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
