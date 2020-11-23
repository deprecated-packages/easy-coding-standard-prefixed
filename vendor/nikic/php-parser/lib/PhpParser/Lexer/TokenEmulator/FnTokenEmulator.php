<?php

declare (strict_types=1);
namespace _PhpScoperc4b135661b3a\PhpParser\Lexer\TokenEmulator;

use _PhpScoperc4b135661b3a\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperc4b135661b3a\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperc4b135661b3a\PhpParser\Lexer\Emulative::PHP_7_4;
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
