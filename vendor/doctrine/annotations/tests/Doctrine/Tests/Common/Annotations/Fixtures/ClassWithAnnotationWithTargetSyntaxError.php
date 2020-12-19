<?php

namespace _PhpScopera8f555a7493c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera8f555a7493c\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationWithTargetSyntaxError;
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
