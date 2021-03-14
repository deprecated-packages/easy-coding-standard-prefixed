<?php

declare (strict_types=1);
namespace _PhpScopera1f11cc38772\PhpParser\Lexer\TokenEmulator;

use _PhpScopera1f11cc38772\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopera1f11cc38772\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopera1f11cc38772\PhpParser\Lexer\Emulative::PHP_7_4;
    }
    public function getKeywordString() : string
    {
        return 'fn';
    }
    public function getKeywordToken() : int
    {
        return \T_FN;
    }
}
