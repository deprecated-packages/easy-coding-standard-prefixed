<?php

declare (strict_types=1);
namespace _PhpScoperef870243cfdb\PhpParser\Lexer\TokenEmulator;

use _PhpScoperef870243cfdb\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperef870243cfdb\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperef870243cfdb\PhpParser\Lexer\Emulative::PHP_8_0;
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
