<?php

namespace _PhpScoper279cf54b77ad\Doctrine\Tests\Common\Annotations\Fixtures;

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
