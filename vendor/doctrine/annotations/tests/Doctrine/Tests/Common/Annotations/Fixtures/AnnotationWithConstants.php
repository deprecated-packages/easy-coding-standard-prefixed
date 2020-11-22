<?php

namespace _PhpScoper16399a42e87c\Doctrine\Tests\Common\Annotations\Fixtures;

/**
 * @Annotation
 * @Target("ALL")
 */
final class AnnotationWithConstants
{
    const INTEGER = 1;
    const FLOAT = 1.2;
    const STRING = '1.2.3';
    /**
     * @var mixed
     */
    public $value;
}
