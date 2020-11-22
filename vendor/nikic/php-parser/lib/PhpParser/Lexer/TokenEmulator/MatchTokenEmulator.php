<?php

declare (strict_types=1);
namespace _PhpScoperac4e86be08e5\PhpParser\Lexer\TokenEmulator;

use _PhpScoperac4e86be08e5\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperac4e86be08e5\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperac4e86be08e5\PhpParser\Lexer\Emulative::PHP_8_0;
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
