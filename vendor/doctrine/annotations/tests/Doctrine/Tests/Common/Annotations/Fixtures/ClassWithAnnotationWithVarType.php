<?php

namespace _PhpScoperca8ca183ac38\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperca8ca183ac38\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationWithVarType;
use _PhpScoperca8ca183ac38\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAll;
use _PhpScoperca8ca183ac38\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
