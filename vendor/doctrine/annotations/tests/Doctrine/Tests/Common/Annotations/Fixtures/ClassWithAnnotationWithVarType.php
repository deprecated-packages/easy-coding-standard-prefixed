<?php

namespace _PhpScopere106f9fd4493\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere106f9fd4493\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationWithVarType;
use _PhpScopere106f9fd4493\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAll;
use _PhpScopere106f9fd4493\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
class ClassWithAnnotationWithVarType
{
    /**
     * @AnnotationWithVarType(string = "String Value")
     */
    public $foo;
    /**
     * @AnnotationWithVarType(annotation = @AnnotationTargetAll)
     */
    public function bar()
    {
    }
    /**
     * @AnnotationWithVarType(string = 123)
     */
    public $invalidProperty;
    /**
     * @AnnotationWithVarType(annotation = @AnnotationTargetAnnotation)
     */
    public function invalidMethod()
    {
    }
}
