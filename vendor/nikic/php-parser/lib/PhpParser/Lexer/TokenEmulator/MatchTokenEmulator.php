<?php

declare (strict_types=1);
namespace _PhpScoper17bb67c99ade\PhpParser\Lexer\TokenEmulator;

use _PhpScoper17bb67c99ade\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper17bb67c99ade\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper17bb67c99ade\PhpParser\Lexer\Emulative::PHP_8_0;
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
