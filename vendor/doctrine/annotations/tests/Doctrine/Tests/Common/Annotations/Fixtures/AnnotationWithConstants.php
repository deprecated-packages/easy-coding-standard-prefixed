<?php

namespace _PhpScopera37d6fb0b1ab\Doctrine\Tests\Common\Annotations\Fixtures;

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
