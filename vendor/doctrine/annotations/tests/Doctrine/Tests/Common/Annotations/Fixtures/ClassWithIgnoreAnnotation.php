<?php

namespace _PhpScoper06c66bea2cf6\Doctrine\Tests\Common\Annotations\Fixtures;

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
