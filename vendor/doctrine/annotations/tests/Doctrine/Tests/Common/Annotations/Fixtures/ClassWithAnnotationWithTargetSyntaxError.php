<?php

namespace _PhpScoper4f985154d5a0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4f985154d5a0\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationWithTargetSyntaxError;
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
