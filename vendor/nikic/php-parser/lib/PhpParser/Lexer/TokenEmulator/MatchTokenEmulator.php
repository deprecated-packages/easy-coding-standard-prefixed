<?php

declare (strict_types=1);
namespace _PhpScoperf53473b45c36\PhpParser\Lexer\TokenEmulator;

use _PhpScoperf53473b45c36\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperf53473b45c36\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperf53473b45c36\PhpParser\Lexer\Emulative::PHP_8_0;
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
