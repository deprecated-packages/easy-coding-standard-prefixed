<?php

declare (strict_types=1);
namespace _PhpScoperdaf95aff095b\PhpParser\Lexer\TokenEmulator;

use _PhpScoperdaf95aff095b\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperdaf95aff095b\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperdaf95aff095b\PhpParser\Lexer\Emulative::PHP_8_0;
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
