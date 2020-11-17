<?php

namespace _PhpScoperad4b7e2c09d8\Doctrine\Tests\Common\Annotations\Fixtures;

/**
 * @ignoreAnnotation("IgnoreAnnotationClass")
 */
class ClassWithIgnoreAnnotation
{
    /**
     * @IgnoreAnnotationClass
     */
    public $foo;
}
