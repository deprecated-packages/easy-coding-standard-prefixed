<?php

namespace _PhpScoper58a0a169dcfb\Doctrine\Tests\Common\Annotations\Fixtures;

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
