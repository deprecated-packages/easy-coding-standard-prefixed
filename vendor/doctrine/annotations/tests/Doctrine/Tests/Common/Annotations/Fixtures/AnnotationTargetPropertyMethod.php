<?php

namespace _PhpScoper065e4ba46e6d\Doctrine\Tests\Common\Annotations\Fixtures;

/**
 * @Annotation
 * @Target({ "METHOD", "PROPERTY" })
 */
final class AnnotationTargetPropertyMethod
{
    public $data;
    public $name;
    public $target;
}
