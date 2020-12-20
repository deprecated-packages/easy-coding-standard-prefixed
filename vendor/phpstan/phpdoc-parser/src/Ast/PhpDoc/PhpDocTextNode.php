<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\PhpDoc;

class PhpDocTextNode implements \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocChildNode
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
