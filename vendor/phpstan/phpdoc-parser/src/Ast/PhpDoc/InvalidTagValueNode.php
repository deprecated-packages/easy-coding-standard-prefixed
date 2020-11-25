<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Ast\PhpDoc;

class InvalidTagValueNode implements \_PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var string (may be empty) */
    public $value;
    /** @var \PHPStan\PhpDocParser\Parser\ParserException */
    public $exception;
    public function __construct(string $value, \_PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Parser\ParserException $exception)
    {
        $this->value = $value;
        $this->exception = $exception;
    }
    public function __toString() : string
    {
        return $this->value;
    }
}
