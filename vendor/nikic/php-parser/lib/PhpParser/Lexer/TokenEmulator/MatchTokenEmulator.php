<?php

declare (strict_types=1);
namespace _PhpScoper4a718ec9156e\PhpParser\Lexer\TokenEmulator;

use _PhpScoper4a718ec9156e\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper4a718ec9156e\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper4a718ec9156e\PhpParser\Lexer\Emulative::PHP_8_0;
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
