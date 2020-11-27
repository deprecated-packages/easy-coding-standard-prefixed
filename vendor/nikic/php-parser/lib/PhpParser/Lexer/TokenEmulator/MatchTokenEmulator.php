<?php

declare (strict_types=1);
namespace _PhpScoper776637f3d3c3\PhpParser\Lexer\TokenEmulator;

use _PhpScoper776637f3d3c3\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper776637f3d3c3\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper776637f3d3c3\PhpParser\Lexer\Emulative::PHP_8_0;
    }
    public function getKeywordString() : string
    {
        return 'match';
    }
    public function getKeywordToken() : int
    {
        return \T_MATCH;
    }
}
