<?php

namespace _PhpScoperad4b7e2c09d8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperad4b7e2c09d8\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
