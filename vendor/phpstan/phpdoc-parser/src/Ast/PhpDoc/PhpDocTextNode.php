<?php

declare (strict_types=1);
namespace _PhpScoper4298f97f3cb3\PHPStan\PhpDocParser\Ast\PhpDoc;

class PhpDocTextNode implements \_PhpScoper4298f97f3cb3\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocChildNode
{
    /** @var string */
    public $text;
    public function __construct(string $text)
    {
        $this->text = $text;
    }
    public function __toString() : string
    {
        return $this->text;
    }
}
