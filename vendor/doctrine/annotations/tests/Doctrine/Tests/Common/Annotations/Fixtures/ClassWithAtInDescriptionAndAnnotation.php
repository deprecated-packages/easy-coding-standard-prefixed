<?php

namespace _PhpScoperaac5f7c652e4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperaac5f7c652e4\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
