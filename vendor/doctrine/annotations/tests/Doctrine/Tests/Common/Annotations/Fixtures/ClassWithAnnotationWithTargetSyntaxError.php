<?php

namespace _PhpScoper7cef7256eba6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7cef7256eba6\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationWithTargetSyntaxError;
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
