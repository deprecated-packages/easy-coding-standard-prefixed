<?php

declare (strict_types=1);
namespace _PhpScoperfb2c402b972b\PhpParser\Lexer\TokenEmulator;

use _PhpScoperfb2c402b972b\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperfb2c402b972b\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperfb2c402b972b\PhpParser\Lexer\Emulative::PHP_8_0;
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
