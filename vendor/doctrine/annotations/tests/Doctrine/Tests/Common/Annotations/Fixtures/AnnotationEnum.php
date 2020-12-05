<?php

namespace _PhpScoperc83f84c90b60\Doctrine\Tests\Common\Annotations\Fixtures;

/**
 * @Annotation
 * @Target("ALL")
 */
final class AnnotationEnum
{
    const ONE = 'ONE';
    const TWO = 'TWO';
    const THREE = 'THREE';
    /**
     * @var mixed
     *
     * @Enum({"ONE","TWO","THREE"})
     */
    public $value;
}
