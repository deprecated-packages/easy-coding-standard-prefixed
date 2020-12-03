<?php

declare (strict_types=1);
namespace _PhpScoperba5852cc6147\PhpParser\Lexer\TokenEmulator;

use _PhpScoperba5852cc6147\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperba5852cc6147\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperba5852cc6147\PhpParser\Lexer\Emulative::PHP_8_0;
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
