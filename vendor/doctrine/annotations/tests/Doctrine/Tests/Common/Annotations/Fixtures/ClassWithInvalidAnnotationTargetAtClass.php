<?php

namespace _PhpScoper8de082cbb8c7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8de082cbb8c7\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
