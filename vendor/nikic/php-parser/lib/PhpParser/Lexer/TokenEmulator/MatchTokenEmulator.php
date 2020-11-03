<?php

declare (strict_types=1);
namespace _PhpScoper83a475a0590e\PhpParser\Lexer\TokenEmulator;

use _PhpScoper83a475a0590e\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper83a475a0590e\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper83a475a0590e\PhpParser\Lexer\Emulative::PHP_8_0;
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
