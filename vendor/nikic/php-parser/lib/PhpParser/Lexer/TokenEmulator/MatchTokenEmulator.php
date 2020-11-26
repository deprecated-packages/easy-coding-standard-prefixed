<?php

declare (strict_types=1);
namespace _PhpScopercb217fd4e736\PhpParser\Lexer\TokenEmulator;

use _PhpScopercb217fd4e736\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopercb217fd4e736\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopercb217fd4e736\PhpParser\Lexer\Emulative::PHP_8_0;
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
