<?php

namespace _PhpScoperdf6a0b341030\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdf6a0b341030\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationWithTargetSyntaxError;
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
