<?php

namespace _PhpScoperaba240c3d5f1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperaba240c3d5f1\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationWithTargetSyntaxError;
/**
 * @AnnotationWithTargetSyntaxError()
 */
class ClassWithAnnotationWithTargetSyntaxError
{
    /**
     * @AnnotationWithTargetSyntaxError()
     */
    public $foo;
    /**
     * @AnnotationWithTargetSyntaxError()
     */
    public function bar()
    {
    }
}
