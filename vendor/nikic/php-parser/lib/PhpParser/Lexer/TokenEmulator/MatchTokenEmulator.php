<?php

declare (strict_types=1);
namespace _PhpScoper842c7347e6be\PhpParser\Lexer\TokenEmulator;

use _PhpScoper842c7347e6be\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper842c7347e6be\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper842c7347e6be\PhpParser\Lexer\Emulative::PHP_8_0;
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
