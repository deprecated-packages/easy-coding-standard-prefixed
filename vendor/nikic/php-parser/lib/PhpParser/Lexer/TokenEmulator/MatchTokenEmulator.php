<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PhpParser\Lexer\TokenEmulator;

use _PhpScoperba24099fc6fd\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperba24099fc6fd\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperba24099fc6fd\PhpParser\Lexer\Emulative::PHP_8_0;
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
