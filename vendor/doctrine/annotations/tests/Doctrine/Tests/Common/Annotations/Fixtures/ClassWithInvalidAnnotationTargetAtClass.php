<?php

namespace _PhpScoperda2604e33acb\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperda2604e33acb\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
