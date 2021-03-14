<?php

declare (strict_types=1);
namespace _PhpScopera1f11cc38772\PhpParser\Lexer\TokenEmulator;

use _PhpScopera1f11cc38772\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScopera1f11cc38772\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera1f11cc38772\PhpParser\Lexer\Emulative::PHP_8_0;
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
