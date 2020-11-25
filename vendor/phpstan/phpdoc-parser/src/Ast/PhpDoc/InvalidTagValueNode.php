<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4\PHPStan\PhpDocParser\Ast\PhpDoc;

class InvalidTagValueNode implements \_PhpScoperaac5f7c652e4\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var string (may be empty) */
    public $value;
    /** @var \PHPStan\PhpDocParser\Parser\ParserException */
    public $exception;
    public function __construct(string $value, \_PhpScoperaac5f7c652e4\PHPStan\PhpDocParser\Parser\ParserException $exception)
    {
        $this->value = $value;
        $this->exception = $exception;
    }
    public function __toString() : string
    {
        return $this->value;
    }
}
