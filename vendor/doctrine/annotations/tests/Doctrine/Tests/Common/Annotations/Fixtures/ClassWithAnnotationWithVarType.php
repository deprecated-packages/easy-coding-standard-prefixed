<?php

namespace _PhpScopercb576ca159b5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercb576ca159b5\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationWithVarType;
use _PhpScopercb576ca159b5\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAll;
use _PhpScopercb576ca159b5\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
