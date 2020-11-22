<?php

declare (strict_types=1);
namespace _PhpScoperc5bee3a837bb\PhpParser\Lexer\TokenEmulator;

use _PhpScoperc5bee3a837bb\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperc5bee3a837bb\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperc5bee3a837bb\PhpParser\Lexer\Emulative::PHP_8_0;
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
