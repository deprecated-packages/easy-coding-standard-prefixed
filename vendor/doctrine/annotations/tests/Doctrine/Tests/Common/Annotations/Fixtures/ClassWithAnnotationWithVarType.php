<?php

namespace _PhpScoperba24099fc6fd\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperba24099fc6fd\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationWithVarType;
use _PhpScoperba24099fc6fd\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAll;
use _PhpScoperba24099fc6fd\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation;
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
