<?php

declare (strict_types=1);
namespace _PhpScoperd1a5bf00e83e\PhpParser\Lexer\TokenEmulator;

use _PhpScoperd1a5bf00e83e\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperd1a5bf00e83e\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperd1a5bf00e83e\PhpParser\Lexer\Emulative::PHP_7_4;
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
