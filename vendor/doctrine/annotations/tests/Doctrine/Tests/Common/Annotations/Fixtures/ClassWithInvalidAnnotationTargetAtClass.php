<?php

namespace _PhpScoper48800f361566\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper48800f361566\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
