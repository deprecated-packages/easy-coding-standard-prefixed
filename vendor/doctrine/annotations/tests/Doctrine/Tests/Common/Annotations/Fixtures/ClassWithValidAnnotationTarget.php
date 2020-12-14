<?php

namespace _PhpScoperc64a4ac1af35\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc64a4ac1af35\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
use _PhpScoperc64a4ac1af35\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAll;
use _PhpScoperc64a4ac1af35\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
use _PhpScoperc64a4ac1af35\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetNestedAnnotation;
/**
 * @AnnotationTargetClass("Some data")
 */
class ClassWithValidAnnotationTarget
{
    /**
     * @AnnotationTargetPropertyMethod("Some data")
     */
    public $foo;
    /**
     * @AnnotationTargetAll("Some data",name="Some name")
     */
    public $name;
    /**
     * @AnnotationTargetPropertyMethod("Some data",name="Some name")
     */
    public function someFunction()
    {
    }
    /**
     * @AnnotationTargetAll(@AnnotationTargetAnnotation)
     */
    public $nested;
}
