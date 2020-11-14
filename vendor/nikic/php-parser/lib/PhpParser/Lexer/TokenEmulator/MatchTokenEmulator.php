<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\PhpParser\Lexer\TokenEmulator;

use _PhpScoper229e8121cf9f\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper229e8121cf9f\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper229e8121cf9f\PhpParser\Lexer\Emulative::PHP_8_0;
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
