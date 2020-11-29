<?php

declare (strict_types=1);
namespace _PhpScoper28ab463fc3ba\PhpParser\Lexer\TokenEmulator;

use _PhpScoper28ab463fc3ba\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper28ab463fc3ba\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper28ab463fc3ba\PhpParser\Lexer\Emulative::PHP_7_4;
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
