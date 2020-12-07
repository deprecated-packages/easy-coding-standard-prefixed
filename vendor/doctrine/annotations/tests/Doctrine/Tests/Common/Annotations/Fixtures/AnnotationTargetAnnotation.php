<?php

namespace _PhpScoper18bd934c069f\Doctrine\Tests\Common\Annotations\Fixtures;

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
