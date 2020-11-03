<?php

namespace _PhpScoper2b44cb0c30af\Doctrine\Tests\Common\Annotations\Fixtures;

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
