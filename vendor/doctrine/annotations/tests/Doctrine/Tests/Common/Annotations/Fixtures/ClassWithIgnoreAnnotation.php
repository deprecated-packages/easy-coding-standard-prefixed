<?php

namespace _PhpScoper4e47e3b12394\Doctrine\Tests\Common\Annotations\Fixtures;

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
