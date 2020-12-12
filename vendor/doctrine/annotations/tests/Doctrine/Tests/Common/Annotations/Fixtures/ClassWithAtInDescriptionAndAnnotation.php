<?php

namespace _PhpScoper83b3b9a317c0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper83b3b9a317c0\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
class ClassWithAtInDescriptionAndAnnotation
{
    /**
     * Lala
     *
     * {
     *     "email": "foo@example.com",
     *     "email2": "123@example.com",
     *     "email3": "@example.com"
     * }
     *
     * @AnnotationTargetPropertyMethod("Bar")
     */
    public $foo;
    /**
     * Lala
     *
     * {
     *     "email": "foo@example.com",
     *     "email2": "123@example.com",
     *     "email3": "@example.com"
     * }
     *
     *@AnnotationTargetPropertyMethod("Bar")
     */
    public $bar;
}
