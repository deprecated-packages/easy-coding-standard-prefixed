<?php

declare (strict_types=1);
namespace _PhpScoper776637f3d3c3\PhpParser\Lexer\TokenEmulator;

use _PhpScoper776637f3d3c3\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper776637f3d3c3\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper776637f3d3c3\PhpParser\Lexer\Emulative::PHP_7_4;
    }
    public function getKeywordString() : string
    {
        return 'fn';
    }
    public function getKeywordToken() : int
    {
        return \T_FN;
    }
}
