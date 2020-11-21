<?php

namespace _PhpScopera4be459e5e3d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera4be459e5e3d\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationWithVarType;
use _PhpScopera4be459e5e3d\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAll;
use _PhpScopera4be459e5e3d\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
