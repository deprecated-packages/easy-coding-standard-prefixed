<?php

namespace _PhpScoper8dd2e1c340b1\Doctrine\Tests\Common\Annotations\Fixtures;

/**
 * @Annotation
 * @Target({ "ANNOTATION" })
 */
final class AnnotationTargetAnnotation
{
    public $data;
    public $name;
    public $target;
}
